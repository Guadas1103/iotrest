<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Sensor extends Model
{
    
    protected $fillable = [
        'id', 'type', 'value', 'date', 'username'
    ];
    protected $hidden = [
       
    ];
}
