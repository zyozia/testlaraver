<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {  return view('welcome'); });
Route::get('/',['as'=>'home','uses'=>'ShipperController@index']);

//Route::get('/shipper', 'ShipperController@index');
Route::get('/shipper', ['as'=>'shipper.index', 'uses'=> 'ShipperController@index']);
Route::get('/new-shipper', ['as'=>'new_shipper', 'uses'=> 'ShipperController@newshipper']);


/*
Route::get('/shipper/create', ['as'=>'shipper_create', 'uses'=> 'ShipperController@create']);
Route::post('/shipper', ['as'=>'shipper_store', 'uses'=> 'ShipperController@store']);
Route::get('/shipper/{shipper}', ['as'=>'shipper_show', 'uses'=> 'ShipperController@show']);
Route::get('/shipper/{shipper}/edit', ['as'=>'shipper_edit', 'uses'=> 'ShipperController@edit']);
Route::post('/shipper/{shipper}', ['as'=>'shipper_update', 'uses'=> 'ShipperController@update']);
*/
$router->resource('shipper','ShipperController');