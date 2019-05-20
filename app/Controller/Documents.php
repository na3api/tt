<?php
namespace App\Controller;

use App\Application;
use App\Exceptions\AppException;
use App\Request;
use App\Services\Bicycle\BicycleBuilder;
use App\Services\Bicycle\Model;
use App\Services\Bicycle\Touring;
use App\Services\Database\Mongo;
use App\Services\Social\SocialBuilder;
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
    public function get(Request $request)
    {
        header('Content-Type: application/json');

        $posts = Mongo::connect('tot')->find('posts');

        echo json_encode($posts);
    }

    public function php(){
        define('ARRAYS', ['Zero','First' => 'First1', 'Seccond']);

        $info = array('кофе', 'коричневый', 'кофеин');

        list('First' => $first) = ARRAYS;

        dump($first);
        assert(is_numeric((2 || 1)), new AppException('True is not false!'));

        assert(false == true, 'false != true');
        echo 'Привет!';
    }
    public function php1(Request $request){
    }
    /**
     * @param $query
     * @param $headers
     * @throws \Exception
     */
    public function terms(Request $request)
    {
        $mongo = Mongo::connect('tot');
        $twitter = (new SocialBuilder())
            ->setType('twitter')
            ->connect();

        $tweets = $twitter->getTweets([
            'call' => 'statuses/user_timeline',
            'screen_name' => 'BrentToderian'
        ]);

        foreach ($tweets as $tweet){
            if(!$mongo->find('posts', ['id' => $tweet->id])){
                Mongo::connect('tot')->insert('posts', $tweet );
            }else{
                dump( 'Tweet with id #' . $tweet->id . ' already exists' . PHP_EOL);
            }

            //Mongo::connect('tot')->set('posts', $tweet );
        }

        dd($tweets);


        $bicycle = (new BicycleBuilder())
            ->setType('touring')
            ->setModel(new Model('GT', 'Avalanche'))
            ->setPrice(18100)
            ->setSize('M')
            ->setColor('green')
            ->setState('new')
            ->create();

        //$bicycle->ride();

        //$bicycle->handlebar = "aluminium";

        unset($bicycle->model_brand);

        dump($bicycle);
    }
}