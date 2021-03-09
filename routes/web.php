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
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout']);

/*Dynamic Routing*/
Route::get('/{Controller}/{action}',
    function ($Controller, $action) {
        return view("{$Controller}.{$action}");
});
// ->middleware('login.check');
