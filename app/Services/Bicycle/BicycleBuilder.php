<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 10:43
 */

namespace App\Services\Bicycle;


class BicycleBuilder
{
    public $type;
    public $model;
    public $price;
    public $size;
    public $color;
    public $year;
    public $state;

    public function setType(string $type){
        $this->type = $type;
        return $this;
    }

    public function setModel(Model $model){
        $this->model = $model;
        return $this;
    }

    public function setPrice(float $price){
        $this->price = $price;
        return $this;
    }

    public function setSize(string $size){
        $this->size = $size;
        return $this;
    }

    public function setColor(string $color){
        $this->color = $color;
        return $this;
    }

    public function setYear(int $year){
        $this->year = $year;
        return $this;
    }

    public function setState(string $state){
        $this->state = $state;
        return $this;
    }

    public function create(){
        switch ($this->type){
            case 'touring':{
                return new Touring($this);

                break;
            }
        }
    }

}