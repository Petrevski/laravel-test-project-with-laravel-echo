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

Route::get('/', 'TestController@test')->name('test');

Route::group(['prefix' => 'projects'], function () {

    Route::get('/create', 'ProjectController@create')->name('project.form');
    Route::post('/store', 'ProjectController@store')->name('project.store');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('skills', function () {
    return ['Laravel', 'Vue', 'PHP', 'JavaScript', 'Tooling'];
});