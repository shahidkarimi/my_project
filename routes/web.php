<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Models\User;
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
    return view('welcome');
});


Route::get('pages/{page?}', [PagesController::class, 'loadPage'])->where('page','contact|about');

Route::group(['prefix' => 'blog'], function(){
    Route::get('/', [PostController::class, 'index']);
    Route::get('/post', [PostController::class, 'showCreateForm'])->name('post.showCreateForm');
    Route::post('/post', [PostController::class, 'store'])->name('post.store');
    Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

});