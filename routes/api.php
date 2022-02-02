<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Post;

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


Route::get('/test', function(){
    return ['message' => 'hello'];
});

/*Route::get('/images', 'PostController@index');
Route::post('/images', 'PostController@store');
Route::put('/images', 'PostController@update');
Route::delete('/images', 'PostController@destroy');*/

Route::get('/images', [PostController::class, 'index']);
Route::get('/images/{id}', [PostController::class, 'show']);
Route::post('/images', [PostController::class, 'store']);
Route::put('/images/{id}', [PostController::class, 'update']);
Route::delete('/images', [PostController::class, 'destroy']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
