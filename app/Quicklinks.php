<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quicklinks extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'quicklinks';

    protected $fillable = [
        'title',
        'url'
    ];
}
