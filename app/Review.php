<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        'customer_id', 'movie_id', 'review', 'rating',
    ];
}
