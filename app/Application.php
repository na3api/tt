<?php

namespace App;

use App\Services\DataService;
use App\Exceptions\AppException;
use App\Services\Facebook;
use App\Services\Twitter;

class Application
{
    /**
     * @param Request $request
     * @throws AppException
     */
    public function run(Request $request){
        try {
            if ($request->route['controller'] == 'info' || $request->route['method'] == 'info') {
                phpinfo();
                die();
            }

            if ($request->route['controller'] == 'hc') {
                echo '200 Success';
                die();
            }
            /** @var string $class */
            $class = 'App\\Controller\\' . ucfirst($request->route['controller']);

            /** @var $controller */
            $controller = new $class;

            /** @var string $method */
            $method = str_replace('-', '_', $request->route['method']);

            if(method_exists($controller, $method)){
                $controller->{$method}($request);
            }else{
                throw new AppException('Resource not found', 404);
            }
        }catch (\Error $exception){
            throw new AppException($exception->getMessage(), $exception->getCode(), $exception->getFile(), $exception->getLine());
        }
    }

    /**
     * @param $name
     * @return Facebook|Twitter
     */
    public static function social_connect($builder){
        if($builder->type == 'facebook'){
            return new Facebook($builder);
        }elseif ($builder->type == 'twitter'){
            return new Twitter($builder);
        }
    }
}