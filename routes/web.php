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
//Route::get('/form/{name?}','ShowProfile@prueba');

/*Route::get('/home/{name}',function($name){
  return view('home')->name;
});*/
Route::get('/home/{name?}',function($name='yoyo'){

  return $name;
});

Route::resource('trainer','ControllerResource');

//redireccion de routes
//Route::redirect('/there','/home',301);
//Route::permanentRedirect('/here','/form');
Route::post('login','Auth\LoginController@login')->name('login');
