<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:55
 */

namespace App\Services\Social\User;

use App\Services\Social\User\User;

class TweetUser extends User
{
    public function __construct(array $user)
    {
        $this->id = $user['id'];
        $this->name = $user['name'];
        $this->screen_name = $user['screen_name'];
        $this->location = $user['location'];
        $this->description = $user['description'];
        $this->url = $user['url'];
        $this->profile_image_url = $user['profile_image_url'];
        $this->created_at = $user['created_at'];
    }
}