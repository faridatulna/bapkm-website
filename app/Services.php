<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'services';

    protected $fillable = [
        'title',
        'fileImg',
        'url',
        'filePdf',
        'description',
    ];
}
