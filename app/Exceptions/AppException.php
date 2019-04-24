<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 3/25/19
 * Time: 11:06 AM
 */

namespace App\Exceptions;

use Throwable;

class AppException extends \ErrorException
{
    public function __construct(string $message = "", int $code = 0, $file = null, $line = null, Throwable $previous = null)
    {
        parent::__construct($message, $code, 1, $file, $line, $previous);
    }
}