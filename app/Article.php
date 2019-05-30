<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'articles';

    protected $fillable = [
        'title',

        'fileImg',
        'url',
        'filePdf',
        
        'description',
        'jenis',
        'tgl_post'
    ];

}
