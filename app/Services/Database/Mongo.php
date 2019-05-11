<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 11/05/19
 * Time: 16:25
 */

namespace App\Services\Database;


use MongoDB\Client;
use MongoDB\Collection;
use MongoDB\Database;
use MongoDB\Driver\Cursor;

class Mongo implements DatabaseInterface
{
    private $client;
    private static $instance = null;

    /**
     * @param string $database
     * @return DatabaseInterface
     */
    public static function connect(string $database) : Mongo{
        if(!self::$instance){
            self::$instance = new self(new Client(getenv('MONGO_URL')), $database);
        }

        return self::$instance;
    }

    private function __construct(Client $client, $database)
    {
        /** @var Database $this */
        $this->client = $client->selectDatabase($database);
    }

    private function __clone(){}
    private function __sleep(){}

    /**
     * @param string $collection
     * @param array $options
     * @return array|bool|mixed
     */
    public function find(string $collection, array $options = []) {
        /** @var Collection $collection */
        $collection = $this->client->selectCollection($collection);

        /** @var Cursor $cursor */
        $cursor = $collection->find($options);

        /** @var array $result */
        $result = [];

        foreach ($cursor as $doc) {
            $result[] = $doc;
        }

        return count($result) == 0 ? false : (count($result) == 1 ? array_shift($result) : $result);
    }

    /**
     * @param string $collection
     * @param $options
     */
    public function insert(string $collection, $options){
        if(!empty($options)){
            /** @var Collection $collection */
            $collection = $this->client->selectCollection($collection);

            if(gettype($options) === 'array'){
                $collection->insertMany($options);
            }else{
                $collection->insertOne($options);
            }
        }
    }
}