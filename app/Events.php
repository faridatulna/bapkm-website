<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'events';

    protected $fillable = [
        'title',
        'dateofEvent'
    ];
}
