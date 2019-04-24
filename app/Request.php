<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 2/6/19
 * Time: 11:36 AM
 */

namespace App;


class Request
{
    /**
     * @var array $query
    */
    public $query = [];

    /**
     * @var array $headers
     */
    public $headers = [];

    /**
     * @var array $route
     */
    public $route = [];

    /**
     * Request constructor.
     */
    public function __construct()
    {
        /* Set route*/
        list($this->route['controller'], $this->route['method']) = explode('/', trim($_SERVER['DOCUMENT_URI'], '/'));

        /* Set query */
        parse_str($_SERVER['QUERY_STRING'], $query);
        $this->query = $query;

        /* set headers */
        $this->headers = $this->getRequestHeaders();
    }

    /**
     * @return array
     */
    private function getRequestHeaders() {
        $headers = array();
        foreach($_SERVER as $key => $value) {
            if (substr($key, 0, 5) <> 'HTTP_') {
                continue;
            }
            $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
            $headers[$header] = $value;
        }
        return $headers;
    }
}