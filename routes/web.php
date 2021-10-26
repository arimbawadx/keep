<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeepController;

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
Route::get('/', function(){
    return view('login');
});
Route::post('/login', [KeepController::class, 'login']);
Route::post('/new-id', [KeepController::class, 'NewID']);
Route::get('/keeps', [KeepController::class, 'index'])->middleware('SessionUsers');
Route::post('/keep/store', [KeepController::class, 'store'])->middleware('SessionUsers');
Route::get('/keep/{id}', [KeepController::class, 'show'])->middleware('SessionUsers');
Route::post('/keep/{id}', [KeepController::class, 'update'])->middleware('SessionUsers');
Route::get('/keep/del/{id}', [KeepController::class, 'destroy'])->middleware('SessionUsers');
Route::get('/logout', [KeepController::class, 'logout'])->middleware('SessionUsers');

