<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//Orders
Route::get('/allorders','API\OrderController@index');
Route::get('/showoneorder/{id}','API\OrderController@show');
Route::post('/deleteoneorder','API\OrderController@delete');
Route::post('/storeoneorder','API\OrderController@store');
Route::post('/updateoneorder','API\OrderController@update');


//Villas
Route::get('/allvillas','API\VillaController@index');
Route::get('/showonevilla/{id}','API\VillaController@show');
Route::post('/deleteonevilla','API\VillaController@delete');
Route::post('/storeonevilla','API\VillaController@store');
Route::post('/updateonevilla','API\VillaController@update');


//Users
Route::get('/allusers','API\UserController@index');
Route::get('/showoneuser/{id}','API\UserController@show');
Route::post('/deleteoneuser','API\UserController@delete');
Route::post('/storeoneuser','API\UserController@store');
Route::post('/updateoneuser','API\UserController@update');


//Messages
Route::get('/allmessages','API\MessageController@index');
Route::get('/showonemessage/{id}','API\MessageController@show');
Route::post('/deleteonemessage','API\MessageController@delete');
Route::post('/storeonemessage','API\MessageController@store');
Route::post('/updateonemessage','API\MessageController@update');
