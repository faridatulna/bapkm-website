<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aboutus extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'aboutuses';

    protected $fillable = [
        'title',
        'year',
        'type', //'hist-logo','hist-name','hist-gallery','org','profile-ap','profile-km','home'
        'banner',
        'longText'
    ];

}
