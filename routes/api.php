<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:api')->group(function () {
    Route::apiResource("users",UserController::class);
    Route::get("/user/current",[UserController::class,"user"]);
    Route::put("/user/current/infos",[UserController::class,"updateInfo"]);
    Route::put("/user/current/password",[UserController::class,"updatePassword"]);
});





//Public
Route::post("/register",[AuthController::class,"register"]);
Route::post("/login",[AuthController::class,"login"]);