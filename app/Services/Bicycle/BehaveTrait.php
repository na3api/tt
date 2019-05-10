<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 14:30
 */

namespace App\Services\Bicycle;


trait BehaveTrait
{
    private $wokeup = false;
    private $cloned = 0;

    public function __set($name, $value)
    {
        throw new \Error('You can\'t set private variable');
    }

    public function __get($name)
    {
        throw new \Error('You can\'t get private variable');
    }

    public function __sleep()
    {
        return ['model', 'type'];
    }

    public function __wakeup()
    {
        $this->wokeup = true;
    }

    public function __clone()
    {
        static $cloned = 0;

        $cloned++;

        $this->cloned = $cloned;
    }

    public function __toString()
    {
        return $this->getInfo();
    }

    public function __invoke()
    {
        return $this->model;
    }

    public function __isset($name)
    {
        $explode = explode('_', $name);

        return isset($this->{$explode[0]}->{$explode[1]});
    }

    public function __unset($name)
    {
        $explode = explode('_', $name);

        unset($this->{$explode[0]}->{$explode[1]});
    }
}