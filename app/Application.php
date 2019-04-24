<?php

namespace App;

use App\Exceptions\AppException;

class Application
{
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
}