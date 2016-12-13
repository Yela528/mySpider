<?php
/**
 * Created by PhpStorm.
 * User: ylsc
 * Date: 16-12-12
 * Time: 下午2:38
 */

namespace database\models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class test extends Eloquent
{
    /**
     * @var string
     */
    protected $table = 'products_list';

    /**
     * @var array
     */
    protected $fillable = ['site_id', 'products_type', 'products_name'];
    protected $hidden = ['updated_at'];
}