<?php

use App\Http\Controllers\HomeController;
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

Route::get('/login',function(){
    return view('login');
});


Route::get('/form',[HomeController::class, 'form'])->name('form');
Route::get('/view',[HomeController::class, 'showData']);
Route::post('/store',[HomeController::class, 'store'])->name('insert');

