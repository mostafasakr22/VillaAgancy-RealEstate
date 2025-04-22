<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {


        Route::get('/', function () {
            return view('welcome');
        })->name('welcome');


        Route::get('/properties', function () {
            return view('properties');
        })->name('properties');

        Route::get('/properties-details', function () {
            return view('properties-details');
        })->name('properties-details');

        Route::get('/contact', function () {
            return view('contact');
        })->name('contact');

        Auth::routes();


        Route::group(["middleware" => 'checkAdmin'], function () {


            Route::get('/home', 'HomeController@index')->name('home');

            Route::get('/user', 'UserController@index')->name('user');

            Route::get('/order', 'OrderController@index')->name('order');

            Route::get('/villa', 'VillaController@index')->name('villa');

            Route::get('/message', 'MessageController@index')->name('message');



            //crud operation (users)
            Route::get('/users/show', 'UserController@index')->name('users.showall');
            Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
            Route::get('/users/delete/{id}', 'UserController@delete')->name('users.delete');

            Route::get('/users/create', 'UserController@create')->name('users.create');
            Route::post('/users/store', 'UserController@store')->name('users.store');

            Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
            Route::post('/users/savenew', 'UserController@save')->name('users.savenew');

            //crud operation (Orders)
            Route::get('/orders/show', 'OrderController@index')->name('orders.showall');
            Route::get('/orders/show/{id}', 'OrderController@show')->name('orders.show');
            Route::get('/orders/delete/{id}', 'OrderController@delete')->name('orders.delete');

            Route::get('/orders/create', 'OrderController@create')->name('orders.create');
            Route::post('/orders/store', 'OrderController@store')->name('orders.store');

            Route::get('/orders/edit/{id}', 'OrderController@edit')->name('orders.edit');
            Route::post('/orders/savenew', 'OrderController@save')->name('orders.savenew');

            //crud operation (Villas)
            Route::get('/villas/show', 'VillaController@index')->name('villas.showall');
            Route::get('/villas/show/{id}', 'VillaController@show')->name('villas.show');
            Route::get('/villas/delete/{id}', 'VillaController@delete')->name('villas.delete');

            Route::get('/villas/create', 'VillaController@create')->name('villas.create');
            Route::post('/villas/store', 'VillaController@store')->name('villas.store');

            Route::get('/villas/edit/{id}', 'VillaController@edit')->name('villas.edit');
            Route::post('/villas/savenew', 'VillaController@save')->name('villas.savenew');

            //crud operation (Messages)
            Route::get('/messages/show', 'MessageController@index')->name('messages.showall');
            Route::get('/messages/show/{id}', 'MessageController@show')->name('messages.show');
            Route::get('/messages/delete/{id}', 'MessageController@delete')->name('messages.delete');
        });
        Route::post('/message/store', 'MessageController@store')->name('message.store');

    }
);
