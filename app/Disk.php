<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Disk extends Model
{

    protected $fillable =[
        'movie_ID', 'type', 'Kiosk_ID'
    ];

    public function customers()
    {
        if (Auth::user()->email == 'brettwebb63@gmail.com')
        {
            return $this->belongsToMany('App\Customer', 'rentals')->withPivot(['id', 'Rent_Date', 'Return_Date', 'Returned_To'])
                ->orderBy('Return_Date');
         }
        else
        {
            return $this->belongsToMany('App\Customer', 'rentals')->withPivot(['id', 'Rent_Date', 'Return_Date', 'Returned_To'])
                                                                    ->orderBy('Return_Date')
                                                                    ->wherePivot('Customer_ID', Auth::user()->id);
        }
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
