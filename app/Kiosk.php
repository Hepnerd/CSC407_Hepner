<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Kiosk extends Model
{
    //
    use SoftDeletes;

    protected $fillable = [
      'location', 'address',
    ];
}
