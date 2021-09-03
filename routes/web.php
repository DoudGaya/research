<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
// dashbaord controller
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// home controller
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/projects', [FrontendController::class, 'projects'])->name('projects');

// login Controller
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

// home controller
Route::get('/', [PostController::class, 'index'])->name('posts');
Route::post('/', [PostController::class, 'store']);
Route::get('/{post}', [PostController::class, 'show'])->name('post.show');
Route::delete('/{post}', [PostController::class, 'destroy'])->name('post.delete');

// LIkes controller
Route::post('/{post}/likes', [PostLikeController::class, 'store'])->name('post.like');
Route::delete('/{post}/likes', [PostLikeController::class, 'destroy'])->name('like.destroy');

// user Post controller
Route::get('/{user:username}/posts', [UserPostController::class, 'index'])->name('user.posts');