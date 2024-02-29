<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Sensor extends Model
{
    
    protected $fillable = [
        'id', 'name', 'type', 'value', 'date', 'user_id'
    ];
    protected $hidden = [
       
    ];
}
