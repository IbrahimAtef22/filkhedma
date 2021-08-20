<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    
    protected $fillable=['name'];

    public function pharmacy(){
        return $this->hasMany(Pharmacy::class);
    }

    public function postoffice(){
        return $this->hasMany(Postoffice::class);
    }

    public function civilregistry(){
        return $this->hasMany(Civilregistry::class);
    }

    public function hospital(){
        return $this->hasMany(Hospital::class);
    }
}
