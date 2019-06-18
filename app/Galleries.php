<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galleries extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'galleries';

    protected $fillable = [
        'fileImg',
        'type',
    ];
}
