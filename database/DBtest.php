<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-9
 * Time: 下午5:24
 */
namespace database;

require __DIR__.'/../vendor/autoload.php';

$database = [
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'database' => 'testSpider',
    'username' => 'root',
    'password' => '123456',
    'charset' => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix' => '',
];

use Illuminate\Container\Container;
use Illuminate\Database\Capsule\Manager as Capsule;//如果你不喜欢这个名称，as DB;就好

$capsule = new Capsule;

// 创建链接
$capsule->addConnection($database);

// 设置全局静态可访问
$capsule->setAsGlobal();

// 启动Eloquent
$capsule->bootEloquent();