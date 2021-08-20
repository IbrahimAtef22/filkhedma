<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postoffice extends Model
{
    use HasFactory;

    protected $fillable=['name','code','address','city_id','map'];

    public function city(){
        return $this->belongsTo(City::class);
    }
}