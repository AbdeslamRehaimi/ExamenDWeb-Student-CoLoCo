<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about')->name('about');

//Ofers
Route::get('/offers', 'OffersController@index')->name('offers');
Route::get('/offers/{titre}','OffersController@show')->name('offers.show');
Route::get('/offer/add','OffersController@reqadd')->name('offers.add');
Route::post('/offers/store','OffersController@edit')->name('offers.store');

//Profile
Route::get('/profile', 'OffersController@userSettings')->name('profile');

//Demands
Route::get('/demands', 'DemandsController@userDemands')->name('demands');
Route::get('/demands/add/{titre}','DemandsController@reqadd')->name('demands.add');
Route::post('/demands/store','DemandsController@edit')->name('demands.store');

