<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserMasterController;
use App\Http\Controllers\PlaceMasterController;
use App\Http\Controllers\ItemMasterController;
use App\Http\Controllers\CategoryMasterController;
use App\Http\Controllers\InwardRegisterController;
use App\Http\Controllers\OutwardRegisterController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[HomeController::Class,"login"]);
Route::get('/signin',[HomeController::Class,"signin"]);
Route::post(
    '/usermaster/check',
    [UserMasterController::class, 'check']
)->name('check');

Route::get(
    '/usermaster/logout',
    [UserMasterController::class, 'logout']
)->name('logout');

Route::get(
    '/inwardregister/usermaster/logout',
    [UserMasterController::class, 'logout']
)->name('logout');

Route::get('/home',[ItemMasterController::Class,"home"]);


//Route::resource('/usermaster','UserMasterController');
//Route::get('/usermaster','UserMasterController@index');
Route::get('/usermaster',[UserMasterController::Class,"index"]);
Route::get('/usermaster/create',[UserMasterController::Class,"create"]);
Route::post('/usermaster/store',[UserMasterController::Class,"store"]);
Route::get('/usermaster/{id}/edit',[UserMasterController::Class,"edit"]);
Route::post('/usermaster/{id}/update',[UserMasterController::Class,"update"]);
Route::get('/usermaster/{id}/destroy',[UserMasterController::Class,"destroy"]);


Route::get('/placemaster',[PlaceMasterController::Class,"index"]);
Route::get('/placemaster/create',[PlaceMasterController::Class,"create"]);
Route::post('/placemaster/store',[PlaceMasterController::Class,"store"]);
Route::get('/placemaster/{id}/edit',[PlaceMasterController::Class,"edit"]);
Route::post('/placemaster/{id}/update',[PlaceMasterController::Class,"update"]);
Route::get('/placemaster/{id}/destroy',[PlaceMasterController::Class,"destroy"]);

Route::get('/itemmaster',[ItemMasterController::Class,"index"]);
Route::get('/itemmaster/create',[ItemMasterController::Class,"create"]);
Route::post('/itemmaster/store',[ItemMasterController::Class,"store"]);
Route::get('/itemmaster/{id}/edit',[ItemMasterController::Class,"edit"]);
Route::post('/itemmaster/{id}/update',[ItemMasterController::Class,"update"]);
Route::get('/itemmaster/{id}/destroy',[ItemMasterController::Class,"destroy"]);

Route::get('/inwardregister/{id}',[InwardRegisterController::Class,"create"]);
Route::get('/inwardregister',[InwardRegisterController::Class,"index"]);
Route::post('/inwardregister/store',[InwardRegisterController::Class,"store"]);
Route::get('/inwardregister/{id}/edit',[InwardRegisterController::Class,"edit"]);
Route::post('/inwardregister/{id}/update',[InwardRegisterController::Class,"update"]);
Route::get('/inwardregister/{id}/destroy',[InwardRegisterController::Class,"destroy"]);

Route::get('/outwardregister',[OutwardRegisterController::Class,"index"]);
Route::get('/outwardregister/{id}',[OutwardRegisterController::Class,"create"]);
Route::post('/outwardregister/store',[OutwardRegisterController::Class,"store"]);


Route::get('/categorymaster',[CategoryMasterController::Class,"index"]);
Route::get('/categorymaster/create',[CategoryMasterController::Class,"create"]);
Route::post('/categorymaster/store',[CategoryMasterController::Class,"store"]);
Route::get('/categorymaster/{id}/edit',[CategoryMasterController::Class,"edit"]);
Route::post('/categorymaster/{id}/update',[CategoryMasterController::Class,"update"]);
Route::get('/categorymaster/{id}/destroy',[CategoryMasterController::Class,"destroy"]);

Route::post('/inwardregister/filter',[InwardRegisterController::Class,"filter"]);
Route::post('/outwardregister/ofilter',[OutwardRegisterController::Class,"ofilter"]);
