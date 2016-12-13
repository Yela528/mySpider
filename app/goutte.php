<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-9
 * Time: 下午4:33
 */
namespace app;

require __DIR__.'/../vendor/autoload.php';

use Goutte\Client;

$client = new Client();

$crawler = $client->request('GET', 'http://iphpt.com/');

$crawler->filter('.animsition-link')->each(function ($node) {
    print $node->text()."\n";
});