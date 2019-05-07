<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 07/05/19
 * Time: 15:44
 */

namespace App\Services;


class Twitter extends Social
{
    public function __construct(SocialBuilder $builder)
    {
        parent::__construct($builder);
    }
}