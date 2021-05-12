<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Producto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/', function () {return view('welcome');});

Route::resource('projects', ProjectController::class);

Route::resource('products', ProductController::class);





Route::get('test', function(){return view('products.test');});











/*Route::get('/user/{id}', [UserController::class, 'show'])
    ->where('id','[0-9]+');

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
    $token = csrf_token();
    return $token;
});

Route::get('/search/{search}', function ($search) {
    return $search;
})->where('search', '.*');
*/

