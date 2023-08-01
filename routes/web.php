<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/home');
});

Route::get('/register', [LoginController::class, 'view']);
Route::post('/register', [LoginController::class, 'storeRegister']);

Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'storeLogin']);


Route::get('/user', function(){
    return view('user.home');
})->middleware('UserCheck');
Route::group(['prefix' => 'user', 'middleware' => 'UserCheck'], function(){
    Route::get('/', function(){
        return view('user.home');
    });
    Route::get('/profile', [UserController::class, 'viewProfile']);
    Route::post('/like', [LikeController::class, 'like']);
    Route::post('/dislike', [LikeController::class, 'dislike']);
});

