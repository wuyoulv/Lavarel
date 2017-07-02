<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Film_type extends Model
{
        //model类关联数据表
    protected $type = 'film_type';
    protected $table = 'film_type';
    // protected $primarykey = 'id';
    public $timestamps = false;
}
