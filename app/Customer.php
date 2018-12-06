<?php

namespace App;

use Illuminate\Notifications\Notifiable;
// use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use Notifiable;
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


    public function customers()
    {
      return $this->belongsToMany('App\Customer', 'reviews')
                  ->withPivot(['id']);
    }
}
