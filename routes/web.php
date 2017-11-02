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

Route::get('/','mainPageController@index');

Route::get('/profile',[
    'uses'=> 'ProfileController@index',
    'as'=> 'profile.index'
//    skrocona nazwa ; latwiej uzywac  ; a dokladniej url do ktorego mozemy sie odnosic
]);

Route::post('/addDataProfile',[
    'uses'=> 'ProfileController@store',
    'as'=> 'profile.store'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

