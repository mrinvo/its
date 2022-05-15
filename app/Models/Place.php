<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'password', 'email'];
    public function city(){
        $this->belongsTo(City::class);
    }
    public function country(){
        $this->belongsTo(Country::class);
    }
}
