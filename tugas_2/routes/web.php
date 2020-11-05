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

// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;

// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });




Route::middleware(['auth','admin'])->group(function(){
    Route::get('/admin-page', 'HomeController@index')->name('admin-page');
});

Auth::routes(['verify' => true]);


Route::get('/', 'DashboardController@index')
    ->name('home');


