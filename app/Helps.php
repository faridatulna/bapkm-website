<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helps extends Model
{
    protected $primaryKey = 'id';
	public $incrementing = true;
    protected $table = 'helps';

    protected $fillable = [
        'title',

        'fileImg',
        'filePdf',
        'description',
        'type', //0=SOP-REGDAT, 1=SOP-PEP, 2=SOP-BEASISWA, 3=SOP-KM
        'postDate'
    ];
}
