<?php

namespace App\Services;
use App\Models\Country;
use App\Interfaces\RetrieveData;

/**
 * Class CountryService.
 */
class CountryService implements RetrieveData
{


    

    public static function ListAllDataInAttribute(){

        
        return  Country::all();

    }

}
