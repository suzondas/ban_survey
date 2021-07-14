<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

/*Login check free*/
Route::get('/', function () {
    return view('welcome');
});
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
/*Login check free Ends*/

/*Admin Login*/
/*AdminViewInst*/
Route::get('admin/AdminViewInst', [\App\Http\Controllers\AdminViewInstController::class, 'index'])->middleware('login.check');
/*AdminViewInst*/

/*Admin Verify*/
Route::get('admin/verify', [\App\Http\Controllers\AdminVerifyController::class, 'index'])->middleware('login.check');
/*Admin Verify*/

/*USEO LOGIN*/
Route::get('admin/USEO', [\App\Http\Controllers\USEOController::class, 'index'])->middleware('login.check');
/*USEO LOGIN*/

/*DEO LOGIN*/
Route::get('admin/DEO', [\App\Http\Controllers\DEOController::class, 'index'])->middleware('login.check');
/*DEO LOGIN*/

/*DEO LOGIN*/
Route::get('admin/BANBEIS', [\App\Http\Controllers\BANBEISController::class, 'index'])->middleware('login.check');
/*DEO LOGIN*/
/*Admin Login Ends*/

/*Routing for Helpers*/
Route::get('admin/getGeo', [\App\Helpers\GetGeo::class, 'GetGeoAll']);
/*Routing for Helpers Ends*/

/*Dynamic Routing for Institutes' pages*/
Route::get('/{Controller}/{action}',
    function ($Controller, $action) {
        return view("{$Controller}.{$action}")->with('inst_id',Auth::user()->institute_id);
})->middleware('login.check');
/*Dynamic Routing for Institutes' pages End*/



