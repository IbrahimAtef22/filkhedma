<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civilregistry extends Model
{
    use HasFactory;

    protected $fillable=['name','address','phone','city_id','map'];
    protected $table="civilregistry";
    public function city(){
        return $this->belongsTo(City::class);
    }
}
