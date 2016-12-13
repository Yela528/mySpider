<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-12
 * Time: 下午4:21
 */

namespace app;

include __DIR__ . '/../vendor/autoload.php';

use Curl\Curl;

$curl = new Curl();
//dd(__DIR__.'/cookie/cookies.txt');
$curl->setCookieFile(__DIR__.'/cookie/zhihu.txt');
//$curl->setUserAgent('Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/54.0.2840.59 Safari/537.36 OPR/41.0.2353.46');
//$curl->setReferrer('https://www.zhihu.com/people/jia-shun-zhang/following');
//$curl->setHeader('X-Requested-With', 'XMLHttpRequest');
//$curl->setCookie('key', 'value');
//$curl->get('https://www.example.com/');



//$curl->get('https://www.zhihu.com/api/v4/members/jia-shun-zhang/followees?per_page=5&include=data%5B%2A%5D.answer_count%2Carticles_count%2Cfollower_count%2Cis_followed%2Cis_following%2Cbadge%5B%3F%28type%3Dbest_answerer%29%5D.topics&limit=5&offset=15');
//
//if ($curl->error) {
//    echo 'Error: ' . $curl->errorCode . ': ' . $curl->errorMessage . "\n";
//} else {
//    echo 'Response:' . "\n";
//    var_dump($curl->response);
//}

dd(urldecode("https://www.zhihu.com/api/v4/members/jia-shun-zhang/followees?per_page=5&include=data%5B%2A%5D.answer_count%2Carticles_count%2Cfollower_count%2Cis_followed%2Cis_following%2Cbadge%5B%3F%28type%3Dbest_answerer%29%5D.topics&limit=5&offset=5"));