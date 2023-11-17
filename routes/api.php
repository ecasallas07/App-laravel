<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Resources\UserResource;
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

//Para devolver elementos sin uso de controlador sino directamente en la ruta API, sin usar controlador
Route::get('/user',function(Request $request){
    return new UserResource(User::find(1));
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
