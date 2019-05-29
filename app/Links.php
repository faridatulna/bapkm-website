<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'links';

    protected $fillable = [
    	'id',
        'title',
        'url'
    ];
}
