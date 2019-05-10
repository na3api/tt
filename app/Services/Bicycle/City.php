<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 10:42
 */

namespace App\Services\Bicycle;


final class City extends Bicycle
{
    public function ride() : void
    {
        echo 'Ride city bike';
    }
}