<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:37
 */

namespace App\Services\Social\Item;


class Facebook
{
    public function __construct(array $tweet)
    {
        $this->post = $tweet;
    }
}