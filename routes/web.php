<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashBoardController;
use App\Http\Controllers\Admin\UserDataController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'home'])->name('home');

Route::get('/dashboard', [DashBoardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
// User side routes
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/about-us', [HomeController::class, 'aboutUsPage'])->name('aboutUs');
Route::get('/services', [HomeController::class, 'servicesPage'])->name('services');
Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog-single/{id}', [\App\Http\Controllers\BlogController::class, 'blogSinglePage'])->name('blog.single');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin side routes
    Route::get('/admin-home', [DashBoardController::class, 'index'])->name('admin.home');
    Route::get('/users', [UserDataController::class, 'list'])->name('users');
    Route::get('/add-blog', [BlogController::class, 'index'])->name('add_blog');
    Route::post('/store-blog', [BlogController::class, 'store_blog'])->name('store.blog');
    Route::get('/list-blog', [BlogController::class, 'blogs_list'])->name('list.blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit_blog'])->name('edit.blog');
    Route::post('/update-blog/{id}', [BlogController::class, 'update_blog'])->name('update.blog');
    Route::post('/delete-blog/{id}', [BlogController::class, 'delete_blog'])->name('delete.blog');
    Route::get('/blog-type', [BlogController::class, 'blog_type_form'])->name('add.blog_type');
    Route::post('/store-blog-type', [BlogController::class, 'store_blog_type'])->name('blog_type');

});

require __DIR__ . '/auth.php';
