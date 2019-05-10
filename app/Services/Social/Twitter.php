<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 07/05/19
 * Time: 15:44
 */

namespace App\Services\Social;

use App\Exceptions\AppException;
use App\Services\Social\Item\Tweet;
use TwitterOAuth\Auth\ApplicationOnlyAuth;
use TwitterOAuth\Exception\MissingCredentialsException;
use TwitterOAuth\Exception\TwitterException;
use TwitterOAuth\Serializer\ArraySerializer;

class Twitter extends Social
{
    /** @var ApplicationOnlyAuth*/
    private $auth;

    public function __construct(SocialBuilder $builder)
    {
        parent::__construct($builder);
    }

    public function connect() : void {
        /**
         * Instantiate ApplicationOnly
         *
         * For different output formats you can set one of available serializers
         * (Array, Json, Object, Text or a custom one)
         */
        try{
            $this->auth = new ApplicationOnlyAuth([
                'consumer_key' => $this->appId,
                'consumer_secret' => $this->secretKey
            ], new ArraySerializer());
        }catch (MissingCredentialsException $exception){
            throw new \Error($exception);
        }



    }

    private function get(string $call, array $params){
        try{
            /**
             * Send a GET call with set parameters
             */
            return $this->auth->get($call, $params);
        }catch (TwitterException $exception){
            throw new \Error($exception);
        }
    }

    public function getTweets(array $parameters) : array {
        if(!isset($parameters['call'])){
            throw new \Error('Parameter "call" is required');
        }

        $tweets = [];

        foreach ($this->get($parameters['call'], $parameters) as $tweet){
            $tweets[] = new Tweet($tweet);
        }

        return $tweets;
    }

}