<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'address',
        'postalcode',
        'payment',
        'room'
    ];
}
