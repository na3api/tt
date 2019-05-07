<?php
namespace App\Controller;

use App\Application;
use App\Exceptions\AppException;
use App\Request;
use App\Services\Document;
use App\Services\ReplacementData;
use App\Services\DataService;
use App\Services\SocialBuilder;
use App\View;
use App\Services\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;
use Mpdf\MpdfException;
use PhpOffice\PhpWord\Exception\CopyFileException;
use PhpOffice\PhpWord\Exception\CreateTemporaryFileException;
use PhpOffice\PhpWord\TemplateProcessor;
use Gears\Pdf;
use App\Services\TransService as Trans;

class Documents extends Controller
{

    /**
     * @param $query
     * @param $headers
     * @throws \Exception
     */
    public function terms(Request $request)
    {
        $builder = new SocialBuilder();

        $connect = $builder->setType('twitter')
            ->setId( '213232')
            ->setSecret('99123213213222')
            ->connect();

        dump($connect);
    }
}