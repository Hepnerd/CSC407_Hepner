<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    //
    protected $fillable = [
        'Movie_ID', 'Disk_ID', 'Customer_ID', 'Rent_Date', 'Return_Date',
    ];
}
