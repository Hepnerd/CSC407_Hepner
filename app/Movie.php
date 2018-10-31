<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title', 'length','description','onDVD','onBlueRay','coverPhoto',
        ];
}
