<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
        header('Access-Control-Allow-Credentials: true');
        

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/editAccount', 'PlayerController@index');
Route::get('editAcct', [UserController::class, 'index']);
Route::get('showAcct/{email}/{password}/{phoneNumber}', [UserController::class, 'show']);
// Route::post('saveAccount', [UserController::class, 'editAccount']);
// Route::post('saveAccount', [UserController::class, 'store'])->withoutMiddleware(['csrf']);
// Route::post('editAcct', [UserController::class, 'store']);
// Route::post('editAcct', [UserController::class, 'store']);
// Route::post('saveaccount', 'UserController@editAccount');
// Route::post('editAcct', [UserController::class, 'edit']);
