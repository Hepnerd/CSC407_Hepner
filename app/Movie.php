<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
        'title', 'length','description','genreID','onDVD','onBlueRay','coverPhoto',
    ];

    public function kiosks()
    {
        return $this->belongsToMany('App\Kiosk', 'disks')
            ->withPivot(['Type', 'id']);
    }

    public function reviews()
    {
        return $this->belongsToMany('App\Movie', 'reviews')
            ->withPivot('comment');
    }
}
