<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\TestController;


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

Route::get('/index/{name}', [ArtisanController::class, 'index']);

Route::get('/call/{name}/{address}', [TestController:: class, 'index']);


Route::resource('user', ArtisanController::class)->only(['index', 'create', 'delete']);

Route::controller(ArtisanController::class)->group(function () {
    Route::get('/add','create');
    Route::get('/edit','edit');
    Route::get('/update','update');
     
});


