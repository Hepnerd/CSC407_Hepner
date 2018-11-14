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
            ->withPivot(['id']);
    }
}
