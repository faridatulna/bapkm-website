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
        'type'
    ];

    public function getSearchResult(): SearchResult
    {
        $url = route('article-page', $this->id) ;

        return new SearchResult(
            $this,
            $this->title,
            $url,
            $this->description,
            $this->type
         );
    }

    // public function scopeSearch($query, $q) 
    // {        
    //    $match = "MATCH('title','description','url','type') AGAINST (?)";
    //    return $query->whereRaw($match, array($q))
    //                 ->orderByRaw($match.' DESC', array($q));  
    // }

}
