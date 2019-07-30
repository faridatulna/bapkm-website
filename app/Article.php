<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Article extends Model implements Searchable
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'articles';

    protected $fillable = [
        'title',
        'fileImg',
        'url',
        'filePdf',
        'description',
        'like_count',
        'type' //filter_id
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('article-page', $this->id) ;

        return new SearchResult(
            $this,
            $this->title,
            $url,
            $this->description,
         );
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function comments_data($id)
    {
        $comment = Comment::where('commentable_id',$id)->get();
        return $comment;
    }

    public function commentsCount($id)
    {
        $aid = Article::where('id',$id)->get();
        return $this->morphMany(Comment::class, 'commentable')->where('commentable_id','=',$id);
    }

    public function filter($id)
    {
        $comment = Filter::findOrFail($id);
        return $comment;
    }
}
