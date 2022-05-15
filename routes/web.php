<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuesionnaireController;
use App\Http\Controllers\PlaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// admin routes
Route::get('/ShowQuestionnaire',[QuesionnaireController::class,'ShowQuestionnaire']);
Route::POST('/UploadQuestionnaire',[QuesionnaireController::class,'UploadQuestion']);
Route::get('/deleteQuestion/{id}',[QuesionnaireController::class,'deleteQuestion']);
Route::get('/updateview/{id}',[QuesionnaireController::class,'updateview']);
Route::POST('/updateQuestionnaire/{id}',[QuesionnaireController::class,'updateQuesionnaire']);
Route::get('/AddQuestionnaire',[QuesionnaireController::class,'AddQuestionnaire']);
//places routes
Route::get('/AddPlace',[PlaceController::class,'AddPlaceView']);
Route::POST('/UploadPlace',[PlaceController::class,'Uploadplace']);
Route::get('/ShowPlaces',[PlaceController::class,'ShowPlaces']);

Route::get('/updatePlaceview/{id}',[PlaceController::class,'updatePlaceview']);

Route::POST('/updatePlace/{id}',[PlaceController::class,'updatePlace']);
Route::get('/deletePlace/{id}',[PlaceController::class,'deletePlace']);


// user routes
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/search',[HomeController::class,'search']);
Route::get('/allplacesview',[HomeController::class,'AllPlacesView']);
Route::POST('/quesionnairePlaces',[HomeController::class,'quesionnairePlaces']);
Route::get('/placeDetails/{id}',[HomeController::class,'placeDetails']);
Route::get('/user_ques',[QuesionnaireController::class,'QuestionnaireView']);
Route::get('/manual_search',[HomeController::class,'manual_search']);
Route::post('/find_places_by_search',[HomeController::class,'find_places_by_search']);
Route::get('/',[HomeController::class,'index']);