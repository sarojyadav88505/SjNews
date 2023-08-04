<?php

use App\Http\Controllers\admin\AdController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'home']);
Route::get('/category/{slug}', [PageController::class, 'category']);
Route::get('/post/{id}', [PageController::class, 'article']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('webcategory', CategoryController::class);
    Route::resource('webcompany', CompanyController::class);
    Route::resource('webarticle', ArticleController::class);
    Route::resource('webad', AdController::class);
});

require __DIR__.'/auth.php';
