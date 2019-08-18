<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'feedback';

    protected $fillable = [
        'rating',
        'username',
        'opinion'
    ];

}
