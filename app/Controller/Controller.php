<?php
/**
 * Created by PhpStorm.
 * User: nazar
 * Date: 2/7/19
 * Time: 4:24 PM
 */

namespace App\Controller;
use App\Request;
use App\Services\Document;
use JsonApiPhp\JsonApi\Attribute;
use JsonApiPhp\JsonApi\DataDocument;
use JsonApiPhp\JsonApi\Error;
use JsonApiPhp\JsonApi\ErrorDocument;
use JsonApiPhp\JsonApi\JsonApi;
use JsonApiPhp\JsonApi\ResourceObject;

abstract class Controller
{
    const REQUIRED = 'required';
    const NOT_REQUIRED = 'not_required';

    const PDF_MIME = 'application/pdf';

    /* http codes */
    const INVALID_QUERY = 400;
    const NOT_FOUND = 404;

    /* Query parameters */
    const TYPE   = 'type';
    const CAR_ID = 'carId';

    const DOC_EXT = 'pdf';

    const MIME_TYPES = [
        'pdf' => 'application/pdf',
        'zip' => 'application/zip',
    ];
    /**
     * @param string $message
     * @param int $code
     */
    protected function error(string $message = '', int $code = self::INVALID_QUERY) : void {
        echo json_encode(
            new ErrorDocument(
                new Error(
                    new Error\Status($code),
                    new Error\Detail($message)
                ),
                new JsonApi()
            ),
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
        die();
    }

    /**
     * @param string $message
     * @param int $code
     */
    protected function success(string $message = '') : void {
        echo json_encode(
            new DataDocument(
                new ResourceObject(
                    'success',
                    '1',
                    new Attribute('title', $message)
                )
            ),
            JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES
        );
        die();
    }

    /**
     * @param $path
     */
    protected function Output($path, $dest = Document::DOWNLOAD) : void {
        ignore_user_abort(true);

        header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
        header("Cache-Control: public");
        header('Content-Length: ' . filesize($path));

        if($dest === Document::DOWNLOAD){
            header("Content-Length:" . filesize($path));
            header("Content-Disposition: attachment; filename=" . basename($path));
            header("File-Name: " . basename($path));

            @readfile($path);
        }elseif ($dest === Document::READ){
            header("Content-Type: " . self::MIME_TYPES[extension($path)]);
            header('Content-Disposition: inline; filename="' .  basename($path) . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            header("File-Name: " . basename($path));

            @readfile($path);
        }
    }
}
