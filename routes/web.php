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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/adminap', function () {
    return view('admin_panel/adminPanelAp');
});
Route::get('/admindeo', function () {
    return view('admin_panel/adminPanelDeo');
});
Route::post('login', [\App\Http\Controllers\LoginController::class, 'login']);
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

/*USEO LOGIN*/
Route::get('admin/USEO', [\App\Http\Controllers\USEOController::class, 'index'])->middleware('login.check');
/*USEO LOGIN*/

/*DEO LOGIN*/
Route::get('admin/DEO', [\App\Http\Controllers\DEOController::class, 'index'])->middleware('login.check');
/*DEO LOGIN*/

/*Dynamic Routing*/
Route::get('/{Controller}/{action}',
    function ($Controller, $action) {
        return view("{$Controller}.{$action}")->with('inst_id',Auth::user()->institute_id);
})
 ->middleware('login.check');
