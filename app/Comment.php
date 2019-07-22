<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $primaryKey = 'cid';
	public $incrementing = true;
    protected $table = 'comments';

    protected $fillable = [
        'name',
        'submit_time',
        'body',
        'parent_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }
}
