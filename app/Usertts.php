<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Usertts extends Eloquent implements Authenticatable
{
	use AuthenticableTrait;
    //
    protected $connection = 'mongodb';
    protected $collection = 'tweets';

    // informações de tweets a serem salvas
    protected $fillable = [
    	'tweeted_at', 'screen_name', 'content', 'rt_count', 'fav_count'
    ];
}
