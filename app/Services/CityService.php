<?php

namespace App\Services;
use App\Models\City;
use App\Interfaces\RetrieveData;

/**
 * Class CityService.
 */
class CityService implements RetrieveData
{
    public static function ListAllDataInAttribute(){
        return City::all();
    }

}
