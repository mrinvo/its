<?php

namespace App\Services;
use App\Models\Questionnaire;
/**
 * Class QuesionnaireService.
 */
class QuesionnaireService
{
    public static function ListAllQuesionnaires(){

        return Questionnaire::where('statues','show')->get();;

    }

}
