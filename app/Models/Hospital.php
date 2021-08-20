<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    protected $fillable=['name','phone','special','address','city_id','map'];
    public function city(){
        return $this->belongsTo(City::class);
    }
    
}
