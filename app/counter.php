<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class counter extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'counters';

    protected $fillable = [
        'today_visitors',
        'total_visitors',
        'date'
    ];

}
