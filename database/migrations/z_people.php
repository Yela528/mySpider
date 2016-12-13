<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-12
 * Time: 下午5:17
 */
namespace database\migrations;

include __DIR__.'/../DBtest.php';
use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('z_people',function ($table){
    $table->increments('id');
    $table->string('avatar_url')->comment('头像链接');
    $table->string('avatar_url_template')->comment('头像临时链接');
    $table->string('badge');
    $table->string('follower_count')->comment('关注者数目');
    $table->string('headline')->comment('标题');
    $table->string('z_id')->comment('知乎ID');
    $table->string('is_followed')->default('false')->comment('');
    $table->string('is_following')->default('false')->comment('');
    $table->string('is_org')->default('false')->comment('');
    $table->string('name')->comment('姓名');
    $table->string('type')->comment('类型');
    $table->string('url')->comment('链接');
    $table->string('url_token')->comment('链接token');
    $table->string('user_type')->comment('用户类型');
    $table->string('answer_count')->default('0')->comment('回答数');
    $table->string('articles_count')->default('0')->comment('文章数');
    $table->index('follower_count');
    $table->index('name');
    $table->index('answer_count');
    $table->index('articles_count');
    $table->index('z_id');
});
