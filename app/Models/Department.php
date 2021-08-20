<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable=['name','price','start_time','end_time'];

    public function hospital(){
        return $this->belongsTo(Hospital::class);
    }
}
