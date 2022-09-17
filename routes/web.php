<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\RestroController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::group(['middleware'=>"web"],function(){
    Route::get('/','App\Http\Controllers\RestroController@index');
    Route::get('/list','App\Http\Controllers\RestroController@list')->name('list');
    Route::get('/addResturant','App\Http\Controllers\RestroController@addResturant')->name('addResturant');
    Route::post('/addResturant','App\Http\Controllers\RestroController@add')->name('add');
    Route::get('/delete/{id}','App\Http\Controllers\RestroController@delete')->name('delete');
    Route::get('/edit/{id}','App\Http\Controllers\RestroController@edit')->name('edit');
    Route::get('/user_registration','App\Http\Controllers\RestroController@registration')->name('registration');
    Route::post('/user_registration','App\Http\Controllers\RestroController@user_registration')->name('user_registration');
    Route::get('/login','App\Http\Controllers\RestroController@login')->name('login');
    Route::post('/login','App\Http\Controllers\RestroController@user_login')->name('user_login');
});









