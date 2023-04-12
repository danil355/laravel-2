<?php

use App\Http\Controllers\IndexController;
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

Route::get('/main', function () { return view('main'); });
Route::get('/resume', [IndexController::class, 'index']);
Route::get('/resume/show', [IndexController::class, 'show']);
Route::get('/first', [IndexController::class, 'Stages']);
Route::get('/second', [IndexController::class, 'ShowStaffs']);
Route::get('/third', [IndexController::class, 'ListStaffs']);
Route::get('/fourth', [IndexController::class, 'CountPerson']);
