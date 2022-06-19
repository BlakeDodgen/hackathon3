<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', ['App\Http\Controllers\IndexController', 'index']);
Route::get('/home/search', ['App\Http\Controllers\IndexController', 'search']);

Route::get('/animal/detail/{animal_id}', ['App\Http\Controllers\AnimalController', 'detail'])->whereNumber('animal_id')->name('animal.detail');
Route::get('/create',['App\Http\Controllers\FormController', 'create']);
Route::post('/animals/detail',['App\Http\Controllers\FormController', 'store']);
Route::get('/home/search_next/{search}', ['App\Http\Controllers\IndexController', 'search_next'])->name('animal.search_next');


