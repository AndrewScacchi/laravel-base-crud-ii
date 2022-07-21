<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


// Right now i'm deliberately NOT using a controller, will use it for CRUD
Route::get('/','HomeController@index')->name('home');
// index
Route::get('/list', 'HomeController@list')->name('list');
Route::get('/about', 'HomeController@about')->name('about');

// Here the CRUD ROUTES

// You can manually create all the route or if you have followed laravel's conventions
// Con can just pass this statis methos that take, the path and the name of Controller
Route::resource('/comics', 'ComicsController');
