<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;


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
Route::get('/', 'PageController@index')->name('welcome');

Auth::routes();

Route::POST('messaggi', 'MessageController@store')->name('messaggi');

Route::prefix('admin')
->namespace('Admin')
->middleware('auth')
->group(function () {
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');
    Route::get('myFavourites', 'HomeController@myFavourites')->name('myFavourites');
    Route::get('mySocial', 'HomeController@mySocial')->name('mySocial');
    Route::get('contactMe', 'HomeController@contactMe')->name('contactMe');
});

