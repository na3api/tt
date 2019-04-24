<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 2/6/19
 * Time: 10:40 AM
 */

namespace App\Services;

use App\Exceptions\AppException;
use App\Request;
use Exception;
use GuzzleHttp\Client;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Exception\GuzzleException;

class DataService
{
    const FORBIDDEN  = 403;

    /** @var string  */
    const AUTHORIZATION_KEY = 'Authorization';

    /** @var string  */
    const PREFIX_JWT_TOKEN = 'Bearer';

    /** @var string  */
    const USER = 'user_id';

    /** @var string  */
    const DEALER = 'dealer_id';

    /* Endpoints */
    const GET_CAR  = '/api/v1/car/{carId}';
    const GET_USER = '/api/v1/users/{userId}/profile';
    const GET_USER_INFO = '/api/v1/users/{userId}/info';
    const GET_DEALER = '/api/v1/dealers/{dealerId}/profile';
    const GET_IMAGES = '/users/{carId}/images.json?limit=0';
    const IMBO_CACHE_ENDPOINT = '/carimage/{carId}/{imageId}/medium';
    const IMBO_NO_IMAGE = '/noimage/medium';

    const GET_CAR_PERMISSION = '/car/permission/{userId}/{carId}';

    /** @var Request $request  */
    private $request;

    /** @var string $userId */
    public $userId = null;

    /** @var string $dealerId */
    public $dealerId = null;

    /**
     * DataService constructor.
     * @param $headers
     * @throws Exception
     */
    public function __construct(Request $request){
        $this->request = $request;

        $this->setUserId();
    }

    public function getNoImage(){
        return getenv('IMAGE_IMBO_URL') . self::IMBO_NO_IMAGE;
    }

    /**
     * @return array
     */
    public function getCar() : array {
        return json_decode($this->send('GET', getenv('CAR_BASIC_ENDPOINT') . $this->replace(self::GET_CAR)), true);
    }

    /**
     * Get user or dealer profile
     *
     * @return array
     */
    public function getUser(string $userId = null) : array {
        if(!$userId){
            $userId = $this->userId;
        }

        $user_info = json_decode($this->send('GET', getenv('USER_ADMIN_PROFILE') . str_replace('{userId}', $userId, self::GET_USER_INFO) . '?key=' . getenv('S2S_ADMIN_API_KEY_VALUE')));

        if($user_info->isDealer){
            /** @var array $result */
            $result = json_decode($this->send('GET', getenv('USER_ADMIN_PROFILE') . str_replace('{dealerId}', $userId, self::GET_DEALER) . '?key=' . getenv('S2S_ADMIN_API_KEY_VALUE')), true);

            $result['privateAddress'] = $result['mainAddress'];

            return $result;
        }else{
            return json_decode($this->send('GET', getenv('USER_ADMIN_PROFILE') . str_replace('{userId}', $userId, self::GET_USER) . '?key=' . getenv('S2S_ADMIN_API_KEY_VALUE')), true);
        }
    }

    /**
     * @return array
     */
    public function getDealer(string $userId = null) : array {
        return json_decode($this->send('GET', getenv('USER_ADMIN_PROFILE') . str_replace('{userId}', $userId ?? $this->userId, self::GET_USER_INFO ) . '?key=' . getenv('S2S_ADMIN_API_KEY_VALUE')), true);
    }

    /**
     * @return array
     */
    public function getImages() : array {
        /** @var array $imbo */
        $imbo = json_decode($this->send('GET', getenv('IMAGE_IMBO_URL') . $this->replace(self::GET_IMAGES) . '?key=' . getenv('S2S_ADMIN_API_KEY_VALUE')), true);

        /** @var array $cached_small_images */
        $cached_small_images = [];

        foreach ($imbo['images'] as $image){
            $cached_small_images[$image['imageIdentifier']] = getenv('IMBO_CACHE_SERVER') . $this->replace(self::IMBO_CACHE_ENDPOINT, $image['imageIdentifier']);
        }

        return $cached_small_images;
    }

    /**
     * @return array
     */
    private function send($method, $uri, array $body = null, array $headers = null) : string {
        /** @var Client $client */
        $client = new Client([
            'verify' => false,
            'http_errors' => false
        ]);

        try{
            $response = $client->request(
                $method,
                $uri,
                [
                    'headers' => $headers,
                    'body' => $body ? json_encode($body) : ''
                ]
            );

            return $response->getBody()->getContents();

        } catch (TransferException $exception){
            throw new AppException($exception->getMessage(), $exception->getCode(), $exception->getFile(), $exception->getLine());
        } catch (GuzzleException $exception){
            throw new AppException($exception->getMessage(), $exception->getCode(), $exception->getFile(), $exception->getLine());
        }
    }

    /**
     * @throws Exception
     */
    private function setUserId() : void {
        if(isset($this->request->query['userId'])){
            $this->userId = $this->request->query['userId'];
        }else{
            /** @var string $jwt */
            $jwt = $this->extractJWTToken($this->request->headers[self::AUTHORIZATION_KEY]);

            if($jwt === false){
                throw new Exception('You Don’t Have Permission to Access', self::FORBIDDEN);
            }

            /** @var Token $token */
            $token = (new Parser())->parse( $jwt );

            if($token->hasClaim(self::DEALER)){
                $this->dealerId = $token->getClaim(self::DEALER);
            }

            if($token->hasClaim(self::USER)){
                $this->userId = $token->getClaim(self::USER);
            }
        }
    }

    /**
     * @param string $request
     * @return string
     */
    private function extractJWTToken($request) : string
    {
        $authorizationData = trim($request);

        if (empty($authorizationData)) {
            return false;
        }

        return trim(str_replace(self::PREFIX_JWT_TOKEN, '', $authorizationData));
    }

    /**
     * @param $string
     * @return string
     */
    private function replace(string $string, string $imageId = '') : string {
        return str_replace([
            '{userId}',
            '{dealerId}',
            '{carId}',
            '{imageId}',
        ], [
            $this->userId,
            $this->dealerId,
            $this->request->query['carId'],
            $imageId
        ], $string);
    }
}