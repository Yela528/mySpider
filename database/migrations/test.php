<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-12
 * Time: 下午2:44
 */

namespace database\migrations;

include __DIR__.'/../DBtest.php';
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('test',function ($table){
    $table->increments('id');
    $table->string('test');
    $table->string('test2');
});
