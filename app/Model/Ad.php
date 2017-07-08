<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class Ad extends Model
{
    protected $table = 'ad';
    public $timestamps = false;
    //protected $connection = 'connection-name';
}
