<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:13
 */

namespace App\Services\Social;


interface SocialInterface
{
    public function connect() : void;
}