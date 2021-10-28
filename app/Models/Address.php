<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'adresses';

    public function state(){
        return $this->belongsTo(State::class);
    }

    public function city(){
        return $this->hasMany(City::class);
    }

    public function real_state(){
        return $this->hasOne(RealState::class);
    }


    use HasFactory;
}