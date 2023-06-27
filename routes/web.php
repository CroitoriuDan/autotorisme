<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NotificationController;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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

Route::get('/',[PostController::class, 'index'])->name('home');

Route::get('posts/{post:slug}',[PostController::class,'show']);
Route::post('posts/{post:slug}/comments', [PostCommentsController::class,'store']);

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::post('admin/posts', [AdminPostController::class,'store']);
Route::get('admin/posts/create', [AdminPostController::class,'create']);
Route::get('admin/posts', [AdminPostController::class,'index']);
Route::get('admin/posts/{post:id}/edit', [AdminPostController::class,'edit']);
Route::patch('admin/posts/{post:id}', [AdminPostController::class,'update']);
Route::delete('admin/posts/{post:id}', [AdminPostController::class,'destroy']);


Route::post('send-sms-notification',[NotificationController::class,'sendSmsNotification'])->middleware('guest');
Route::post('2falogin',[NotificationController::class,'store']);
Route::get('send-sms-notification',[NotificationController::class,'create']);

Route::get('tracking',[PostController::class,'track']);
