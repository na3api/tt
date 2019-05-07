<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 07/05/19
 * Time: 15:43
 */

namespace App\Services;


class Facebook extends Social
{
    public function __construct(SocialBuilder $builder)
    {
        parent::__construct($builder);
    }
}