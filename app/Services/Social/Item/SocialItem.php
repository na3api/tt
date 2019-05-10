<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 10/05/19
 * Time: 16:46
 */

namespace App\Services\Social\Item;

abstract class SocialItem implements SocialItemInterface
{
    public $id;
    public $text;
    public $created_at;
    public $user;
    public $source;
    public $lang;
}