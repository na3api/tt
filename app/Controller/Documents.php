<?php
namespace App\Controller;

use App\Exceptions\AppException;
use App\Request;
use App\Services\DataService;
use App\View;

class Documents extends Controller
{
    /**
     * @param $query
     * @param $headers
     * @throws \Exception
     */
    public function get(Request $request)
    {
        (new View('index/index.php'))->render();
    }
}