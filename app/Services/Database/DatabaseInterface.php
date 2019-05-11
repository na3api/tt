<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 11/05/19
 * Time: 16:25
 */

namespace App\Services\Database;


interface DatabaseInterface
{
    /**
     * @param string $database
     * @return DatabaseInterface
     */
    public static function connect(string $database);

    public function find(string $collection, array $options = []);
    public function insert(string $collection, $options);
}