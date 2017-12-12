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

/*
 * display, update, edit & destroy data "PROFILES"
 */
Route::get('/profile',[
    'uses'=> 'ProfileController@index',
    'as'=> 'profile.index'
//    skrocona nazwa ; latwiej uzywac  ; a dokladniej url do ktorego mozemy sie odnosic
]);

Route::post('/addDataProfile',[
    'uses'=> 'ProfileController@store',
    'as'=> 'profile.store'
]);

Route::post('/editProfile', [
    'uses'=>'ProfileController@edit',
    'as'=>'profile.edit'
]);

Route::post('/updateProfile', [
    'uses'=>'ProfileController@update',
    'as'=>'profile.update'
]);

Route::post('/deleteProfile',[
    'uses'=>'ProfileController@destroy',
    'as'=>'profile.destroy'
]);
Route::get('/testProfile',[
    'uses'=>'ProfileController@save',
    'as'=>'profile.test'
]);
//Team route
Route::get('/team',[
    'uses'=> 'TeamController@index',
    'as'=> 'team.index'
]);
Route::post('/add_team',[
    'uses'=> 'TeamController@store',
    'as'=> 'team.store'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

