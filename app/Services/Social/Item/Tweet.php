<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:37
 */

namespace App\Services\Social\Item;

use App\Services\Social\User\TweetUser;

class Tweet extends SocialItem
{
    public function __construct(array $tweet)
    {
        $this->created_at = $tweet['created_at'];
        $this->id = $tweet['id'];
        $this->text = $tweet['text'];
        $this->source = $tweet['source'];
        $this->lang = $tweet['lang'];
        $this->user = new TweetUser($tweet['user']);
    }
}