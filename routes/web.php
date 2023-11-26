<?php

use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
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
    return view('home.welcome', ['title' => 'Home', 'active' => 'home']);
});

Route::get('/user', [UserController::class, 'index'])->middleware('auth');
Route::post('/user/image', [UserController::class, 'addImage'])->middleware('auth');
Route::get('/save-video', [UserController::class, 'saveVid'])->middleware('auth');

Route::get('/help', function () {
    return view('user.help', ['title' => 'Help', 'active' => 'help']);
});
Route::get('/policy', function () {
    return view('user.policy', ['title' => 'policy', 'active' => 'none']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/videos', [VideoController::class, 'index']);
Route::post('/videos', [VideoController::class, 'upload'])->middleware('auth');
Route::get('/upload', [UserController::class, 'upload'])->middleware('auth');

Route::get('/videos/{video}', [VideoController::class, 'show'])->middleware('custom.auth');
Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->middleware('auth');

Route::post('/bookmark/add',[BookmarkController::class, 'add'])->middleware('auth');
Route::delete('/bookmark/{bookmark}',[BookmarkController::class, 'destroy'])->middleware('auth');

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
