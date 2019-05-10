<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 10:39
 */

namespace App\Services\Bicycle;


final class Touring extends Bicycle
{
    public function __construct(BicycleBuilder $builder)
    {
        parent::__construct($builder);
    }

    public function ride() : void {
        echo 'Ride Touring Bike ' . $this->model->brand . '(' . $this->model->model. ')';
    }

    public function getInfo() : string {
        return 'Ride Touring Bike ' . $this->model->brand . '(' . $this->model->model. ')' . PHP_EOL . ' Price: ' . $this->price;
    }
}