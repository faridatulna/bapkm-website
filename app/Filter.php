<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
	protected $primaryKey = 'id';
    public $incrementing = true;
    protected $table = 'filters';

    protected $fillable = [
        'filter_code',
        'filter_name',
    ];

    public function article()
    {
        return $this->hasMany(Article::class, 'type');
    }
}
