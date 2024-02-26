<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [HomeController::class, 'homepage'])->name('home');


// route to account
Route::get('/account', function () {
    return view('acc.account');
})->name('account');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/post_page', [AccountController::class, 'post_page'])->name('post_page');

Route::post('/add_post', [AccountController::class, 'add_post'])->name('add_post');

Route::get('/view_posts', [AccountController::class, 'view_posts'])->name('view_posts');

Route::get('/delete_post/{Id}', [AccountController::class, 'delete_post'])->name('delete_post');

Route::get('/edit_post/{Id}', [AccountController::class, 'edit_post'])->name('edit_post');

Route::post('/update_post/{Id}', [AccountController::class, 'update_post'])->name('update_post');
