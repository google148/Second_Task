<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website;
use App\Http\Controllers\MyController;
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

Route::get('/',[website::class,'hello']);
Route::get('/index',[website::class,'index']);
Route::post('/getName',[website::class,'getName']);



Route::get('form',[FormController::class,'index']);
Route::post('form',[FormController::class,'insertForm']);
Route::view('form','form');

Route::get('list',[FormController::class,'viewList']);



Route::get('export',[MyController::class,'export']);
// Route::get('export', 'MyController@export')->name('export');
Route::get('importExportView', 'MyController@importExportView');
Route::post('import', 'MyController@import')->name('import');
