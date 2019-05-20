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
    public function __construct(BicycleBuilder $builder)
    {
        parent::__construct($builder);
    }

    public function getInfo() : string {
        return 'Ride Touring Bike ' . $this->model->brand . '(' . $this->model->model. ')' . PHP_EOL . ' Price: ' . $this->price;
    }

    public function ride() : void
    {
        echo 'Ride city bike';
    }
}