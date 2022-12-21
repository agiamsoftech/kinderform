<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('form', function () {
    return view('form');
});
Route::post('/fetchCountries', [FormController::class, 'fetchCountries']);
Route::post('/fetchStates', [FormController::class, 'fetchStates']);
Route::post('/fetchminibody', [FormController::class, 'fetchminibody']); //not use

Route::post('submitform',[FormController::class,'insert'])->name('submitform');

Route::get('managekid',[FormController::class,'managekid'])->name('managekid');
Route::get('addperson/{id?}',[FormController::class,'showpersonform'])->name('addperson');

Route::post('submitpersonform',[FormController::class,'addpersonDetail'])->name('submitpersonform');

Route::get('deleteperson/{id?}',[FormController::class,'deleteKidPerson'])->name('deleteperson');

Route::get('viewques',[FormController::class,'viewques'])->name('viewques');
