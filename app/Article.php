<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;

    protected $fillable = [
    	'id',
    	'id_user',
        'title',
        'fileImg',
        // 'file',
        'description',
        'status',
        'tgl_post'
    ];

}
