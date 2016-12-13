<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-12
 * Time: 下午4:18
 */

require __DIR__. '/../vendor/autoload.php';


use \Curl\MultiCurl;

// Requests in parallel with callback functions.
$multi_curl = new MultiCurl();

$multi_curl->success(function($instance) {
    echo 'call to "' . $instance->url . '" was successful.' . "\n";
    echo 'response:' . "\n";

    sleep(5);
});
$multi_curl->error(function($instance) {
    echo 'call to "' . $instance->url . '" was unsuccessful.' . "\n";
    echo 'error code: ' . $instance->errorCode . "\n";
    echo 'error message: ' . $instance->errorMessage . "\n";
});
$multi_curl->complete(function($instance) {
    echo 'call completed' . "\n";
});

$multi_curl->addGet('http://www.g9zz.com/', []);
$multi_curl->addGet('http://iphpt.com/', []);
$multi_curl->addGet('http://www.ylsc633.com/',[]);

$multi_curl->start();

