<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::get('/posts', function(){
    $post = Post::create([
        'title' => 'test_image', 
        'image_id' => 'img1-slug', 
        'image_name'=> '1234', 
        'img_id' => 'beauty one',
        'img_slug' => '2221'
    ]);
    return $post;
});  

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
