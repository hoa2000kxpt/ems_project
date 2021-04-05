<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Input\Input;

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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('/', "StudentController@index");
Route::get('/edit/{id}', "StudentController@edit");
Route::get('/show/{id}', "StudentController@show");
Route::get('/create', "StudentController@create");
Route::post('/store', "StudentController@store");
Route::patch('/update/{id}', "StudentController@update");

Route::get('/delete/{id}',"StudentController@destroy");
Route::get('/search', "StudentController@search");

Route::get('/student_profile/{id}', "StudentController@profile");




