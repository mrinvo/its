<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Questionnaire;
use App\Models\Place;
use App\Models\City;

class HomeController extends Controller
{
    public function redirect()
    {

        $usertype = Auth::user()->usertype;
        if($usertype == 1){
            return redirect('ShowPlaces');
        }else{
            $user_country = Auth::user()->country;
            $user_city = Auth::user()->city;
            $country_data = Place()->City()->where('city');

        return view('User.home',compact('data'));
        }
    }

    public function index (){

        if (Auth::id()){
            return redirect('redirect');
        }else{

            $data = Place::all();

        return view('User.home',compact('data'));
        }
    }

    

    public function find_places_by_search(Request $request){

        $place_name = $request->place_name;
        $country_name = $request->country_name;
        $city_name = $request->city_name;
        $city_id = City::getCityIdByName($city_name);
        if($place_name == ''){

            $data = DB::table('places')->where('city_id',$city_id)->get();

            return view('User.places',compact('data'));
        }else{

            $data = DB::table('places')->where('city_id',$city_id)
                                        ->where('name',$place_name)
                                        ->get();
                                        

            return view('User.places',compact('data'));                            

        }

        

        // $data  = product::where('title','Like','%'.$search.'%')->get();
        // return view('user.home',compact('data'));
    }
    

    public function manual_search(){
        return view('User.manual_search');
    }

    public function quesionnairePlaces(Request $request){

        $data = Place::whereIn('city_id',[City::getCityIdByCommonFood($request->food)])->get();
        // $data = City::getCityIdByIcommonFood($request->food);
        
        return view('user.places',compact('data'));


    }
    public function placeDetails($id){
        $data = Place::find($id);
        return view('user.placeDetails',compact('data'));
    }
    public function AllPlacesView(){

        $data = Place::all();
        
        return view('user.places',compact('data'));
    }
    //
}
