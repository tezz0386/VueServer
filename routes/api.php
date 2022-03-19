<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\User\UserController;
use App\Http\Controllers\Api\v1\Login\LoginController;
use App\Http\Controllers\Api\v1\Logout\LogoutController;
use App\Http\Controllers\Api\v1\Register\RegisterController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix'=>'v1'], function(){
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class);
    Route::post('/register', RegisterController::class);    
});
Route::group(['prefix'=>'v1', 'middleware'=>'auth:api'], function(){
    Route::get('/me', [UserController::class, 'me']);
});