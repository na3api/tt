<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 07/05/19
 * Time: 15:43
 */

namespace App\Services;


abstract class Social
{
    public $appId = null;
    public $secretKey = null;
    public $type = null;

    public function __construct(SocialBuilder $builder)
    {
        $this->type = $builder->type;
        $this->appId = $builder->appId;
        $this->secretKey = $builder->secretKey;
    }
}