<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:50
 */

namespace App\Services\Social\User;

abstract class User implements UserInterface
{
    public $id;
    public $name;
    public $screen_name;
    public $location;
    public $description;
    public $url;
    public $profile_image_url;
    public $created_at;
}