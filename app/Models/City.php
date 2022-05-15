<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    public static function getCityNameById($id){
        return City::where('id', $id)->pluck('name')->first();
    }
    public static function getCityIdByName($name){
        return City::where('name', $name)->pluck('id')->first();
    }
    public static function getCityIdByCommonFood($commonfood){
        return City::where('common_food', $commonfood)->pluck('id')->first();
    }
    
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function Place(){
        return $this->hasMany(place::class);
    }

}
