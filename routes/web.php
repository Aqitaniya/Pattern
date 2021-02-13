<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPost;

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

Route::get('/propertyContainer',   [BlogPost::class, 'propertyContainer']);
Route::get('/delegation',   [BlogPost::class, 'delegation']);
Route::get('/eventChannel',   [BlogPost::class, 'eventChannel']);
