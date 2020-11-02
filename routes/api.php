<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
header("Access-Control-Allow-Origin: *");
        header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, x-xsrf-token');
        header('Access-Control-Allow-Credentials: true');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    
    return $request->user();
});
// Route::get('/editAccount', 'UserController@index');
// Route::get('editAcct', [UserController::class, 'index']);
// Route::post('editAcct', [UserController::class, 'store']);
// Route::post('saveaccount', 'UserController@editAccount');
Route::post('editAcct', [UserController::class, 'editAccount']);
// Route::post('/editAcct', 'UserController@save');
