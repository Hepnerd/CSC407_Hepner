<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Disk extends Model
{
    //
    // use SoftDeletes;

    protected $fillable =[
        'movie_ID', 'type', 'Kiosk_ID'
    ];

    public function customers()
    {
        return $this->belongsToMany('App\Customer', 'rentals')
            ->withPivot(['id', 'Rent_Date']);
    }

    public function movie()
    {
        return $this->belongsTo('App\Movie', 'Movie_ID');
    }

    public function kiosk()
    {
        return $this->belongsTo('App\Kiosk', 'Kiosk_ID');
    }
}
