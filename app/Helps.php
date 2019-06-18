<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helps extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'helps';

    protected $fillable = [
        'title',

        'fileImg',
        'filePdf',
        'description',
        'type',
        'datePost'
    ];
}
