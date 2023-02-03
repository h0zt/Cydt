<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\ProjectController; //add ProjectController
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

Auth::routes();

Route::get('/', 'App\Http\Controllers\ProjectController@firstindex')->name('index');
Route::get('/home', 'App\Http\Controllers\ProjectController@index')->name('home');
#
Route::get('/create_project', 'App\Http\Controllers\ProjectController@create')->name('create_project');
Route::get('project', 'App\Http\Controllers\ProjectController@show')->name('project');
Route::get('edit_project/{project}', 'App\Http\Controllers\ProjectController@edit')->name('edit');
#
Route::post('store', 'App\Http\Controllers\ProjectController@store')->name('store');
Route::put('edit/{project}','App\Http\Controllers\ProjectController@update')->name('update');
Route::delete('/{project}','App\Http\Controllers\ProjectController@destroy')->name('destroy');


/**\
 * ROUTES FOR THE USER CONTROLLER
 * just make sure it works with another controller
 */
//Route::get('/admin', 'App\Http\Controllers\UserController@index');
//Route::get('/admin', 'App\Http\Controllers\UserController@index');;
//Route::get('edit_user/{user}', 'App\Http\Controllers\UserController@edit')->name('edit');
#
//Route::post('store', 'App\Http\Controllers\UserController@store')->name('store');
//Route::put('edit/{user}','App\Http\Controllers\UserController@update')->name('update');
//Route::delete('/{user}','App\Http\Controllers\UserController@destroy')->name('destroy');







