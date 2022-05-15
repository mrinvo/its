<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Questionnaire;
use App\Models\Place;
use App\Models\Country;
use App\Models\City;
use App\Services\CountryService;
use App\Services\CityService;

class PlaceController extends Controller
{

    public function AddPlaceView(){

        $all_stored_countries = CountryService::ListAllDataInAttribute();
        $all_stored_cities = CityService::ListAllDataInAttribute();
        
        return view('admin.addplace',compact('all_stored_countries','all_stored_cities'));   
    }
    public function UploadPlace(Request $request){

        $data  = new Place;


        
        $data->name =  $request->place_name;
        $data->type =  $request->place_type;
        $data->country_id =  $request->country;
        $data->city_id =  $request->city;
        $data->img =  $request->img;
        $data->map = $request->place_map;
        
        $data->save();
        return redirect()->back()->with('message','your place has been added successfuly');
        
        


    }
    public function ShowPlaces(){

        $data = Place::All();
        return view('admin.ShowPlaces',compact('data'));
    }

    public function updatePlaceview($id){
        $data = Place::find($id);

        $countries = Country::All();
        $cities = City::All();

        return view('admin.updatePlaceview',compact('data','countries','cities'));

    }
    public function updatePlace(Request $request,$id){

        $data  = Place::find($id);


        $data->name =  $request->place_name;
        $data->type =  $request->place_type;
        $data->country_id =  $request->country;
        $data->city_id =  $request->city;
        $data->map =  $request->place_map;
        $data->img = $request->img;
        $data->save();
        return redirect()->back()->with('message','your place has been updated successfuly');
        
        


    }

    public function deletePlace($id){
        $data = Place::find($id);
        $data->delete();
        return redirect()->back()->with('message','your place has been deleted successfuly');

    }
    //
}
