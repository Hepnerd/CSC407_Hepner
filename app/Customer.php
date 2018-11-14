<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = [
      'name', 'email', 'password',
    ];


    public function disks()
    {
        return $this->belongsToMany('App\Disk', 'rentals')
            ->withPivot('comment')
            ->withTimestamps();
    }
}
