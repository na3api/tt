<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 10:38
 */

namespace App\Services\Bicycle;


abstract class Bicycle implements BicycleInterface
{
    use BicycleTrait,
        BehaveTrait;

    protected $type;
    protected $model;
    protected $price;
    protected $size;
    protected $color;
    protected $year;
    protected $state;

    public function __construct(BicycleBuilder $builder)
    {
        $this->type  = $builder->type;
        $this->model = $builder->model;
        $this->price = $builder->price;
        $this->color = $builder->color;
        $this->size  = $builder->size;
        $this->state = $builder->state;
        $this->year  = $builder->type;
    }
}