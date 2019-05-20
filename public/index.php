<?php
/**
 * This file is part of the Imbo package
 *
 * (c) Christer Edvartsen <cogo@starzinger.net>
 *
 * For the full copyright and license information, please view the LICENSE file that was
 * distributed with this source code.
 */

namespace Index;

use App\Request;
use App\Exceptions\AppException;
use App\Application;
use JsonApiPhp\JsonApi\Error;
use JsonApiPhp\JsonApi\ErrorDocument;
use JsonApiPhp\JsonApi\JsonApi;

ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ARR', [
    'name' => 'Nazar',
    'age' => '28',
    'position' => 'WEB developer'
]);

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../app/helpers.php';

//my_assert_handler(ASSERT_WARNING, 0);
assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_QUIET_EVAL, 1);
//assert_options( ASSERT_CALLBACK, 'my_assert_handler');

register_shutdown_function('shutDownFunction');

try {
    /* Dotenv */
    $dotenv = \Dotenv\Dotenv::create(__DIR__ . '/..');
    $dotenv->load();

    /* Application */
    $application = new Application();
    $application->run(new Request());

} catch (AppException $e) {
    echo json_encode(
        new ErrorDocument(
            new Error(
                new Error\Status($e->getCode()),
                new Error\Detail($e->getMessage()),
                new Error\SourceParameter($e->getFile()),
                new Error\SourcePointer($e->getLine())
            ),
            new JsonApi()
        ),
        JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
    );
    die();
}