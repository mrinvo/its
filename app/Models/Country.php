<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public static function getContryNameById($id){
        return Country::where('id', $id)->pluck('name')->first();
    }
    public function city(){
        $this->hasMany(City::class);
    }
    public function place(){
        $this->hasMany(Place::class);
    }
}
