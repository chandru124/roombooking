<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\http\Controllers\OwnerController;
use App\Http\Controllers\uploadController;
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
    return view('home');
});
Route::get('/log',[OwnerController::class,'sign']);
Route::get('/getreq1', [Controller::class, 'getreq1']);
Route::match(['get','post'],'/loging',[OwnerController::class, 'logins']);
Route::get('/rooms',function(){
    return view('rooms');
});
Route::get('/details1',function(){
    return view('details1');
});
Route::get('/details2',function(){
    return view('details2');
});

    
