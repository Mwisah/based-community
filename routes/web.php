<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AdminController;
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

Route::get('/', function () {
    return redirect()->route('article.show', 2);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['role:editor']], function () {
    Route::get('article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::post('article/create', [ArticleController::class, 'store'])->name('article.store');
    Route::get('article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
    Route::post('article/{article}/edit', [ArticleController::class, 'update'])->name('article.update');
});
Route::get('article/{article}', [ArticleController::class, 'show'])->name('article.show');