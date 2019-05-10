<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 11:26
 */

namespace App\Services\Bicycle;


interface BicycleInterface
{
    public function ride() : void;
    public function getInfo() : string;
}