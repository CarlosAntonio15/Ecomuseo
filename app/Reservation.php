<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['id','identification', 'name', 'lastname', 'reservationDate', 'reservationHour', 
                            'adultQuantity', 'childrenQuantity', 'total', 'tourType',
                            'email','phone','status'];

    public function Usuario()
    {
     return $this->belongsTo('App\Usuario');
    }
}
