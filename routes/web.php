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


Route::match(['get','post'],'/','MainController@index');
Route::match(['post'],'/contactForm','MainController@contactUs');
Auth::routes();
Route::match(['get','post'],'/admin','MainController@admin');
Route::match(['get','post'],'/admin/carousel','MainController@carousel');
Route::match(['get','post'],'/admin/portfolio','MainController@portfolio');
Route::match(['get','post'],'/admin/service','MainController@service');
Route::match(['get','post'],'/admin/gallery','MainController@gallery');
Route::match(['get','post'],'/admin/biography','MainController@bio');
Route::match(['get','post'],'/admin/clients','MainController@clients');
Route::match(['get','post'],'/admin/address','MainController@office');
Route::match(['get','post'],'/admin/team','MainController@team');
Route::match(['get','post'],'/admin/team','MainController@team');
Route::get('/admin/logout', function(Request $request){
    Auth::logout();
    return redirect('/');
});
