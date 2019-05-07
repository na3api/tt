<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 07/05/19
 * Time: 16:43
 */

namespace App\Services;


class SocialBuilder
{
    public $appId = null;
    public $secretKey = null;
    public $type = null;

    public function setId(string $appId){
        $this->appId = $appId;

        return $this;
    }

    public function setSecret(string $secret){
        $this->secretKey = $secret;

        return $this;
    }

    public function setType(string $type){
        $this->type = $type;

        return $this;
    }

    public function connect() : Social{
        if($this->type == 'facebook'){
            return new Facebook($this);
        }elseif ($this->type == 'twitter'){
            return new Twitter($this);
        }
    }
}