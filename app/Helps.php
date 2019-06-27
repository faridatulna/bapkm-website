<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

class Helps extends Model implements Searchable
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'helps';

    protected $fillable = [
        'title',

        'fileImg',
        'filePdf',
        'description',
        'type' //0=SOP-REGDAT, 1=SOP-PEP, 2=SOP-BEASISWA, 3=SOP-KM
    ];

    public function getSearchResult(): SearchResult
    {
        if($this->type == 1){
            $url = "help/regdat/";
        }elseif($this->type == 2){
            $url = route('help.pep');
        }elseif($this->type == 3){
            $url = "help/beasiswa/";
        }elseif($this->type == 4){
            $url = route('help.datkeg');
        }
        

        return new SearchResult(
            $this,
            $this->title,
            $url,
            $this->description
        );
    }
}
