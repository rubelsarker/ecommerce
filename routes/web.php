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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('user.home');
});
//Route::get('welcome', function () {
//    return view('user.home');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//slider
//Route::group(['middleware' => 'auth:admin'], function(){
//    Route::get('slider/create','Admin\SliderController@create')->name('slider.create');
//    Route::post('slider/create','Admin\SliderController@store')->name('slider.store');
//    Route::get('slider-all','Admin\SliderController@index')->name('slider.index');
//    Route::delete('slider-delete/{id}','Admin\SliderController@destroy')->name('slider.destroy');
//    Route::get('slider-active/{id}','Admin\SliderController@active')->name('active');
//    Route::get('slider-unactive/{id}','Admin\SliderController@unactive')->name('unactive');
//
//});

Route::get('slider/create','Admin\SliderController@create')->name('slider.create');
Route::post('slider/create','Admin\SliderController@store')->name('slider.store');
Route::get('slider-all','Admin\SliderController@index')->name('slider.index');
Route::delete('slider-delete/{id}','Admin\SliderController@destroy')->name('slider.destroy');
Route::get('slider-active/{id}','Admin\SliderController@active')->name('active');
Route::get('slider-unactive/{id}','Admin\SliderController@unactive')->name('unactive');

Route::resource('category','Admin\CategoryController');




