<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Route::get('/', [HomeController::class, 'index']); Route::get('/', [PostsController::class, 'index']);
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [PostsController::class, 'index']); 

Route::post('/posts', [PostsController::class, 'create']); 
// Route::get('/dashboard/categories/{id}', [CategoriesController::class, 'show']);
Route::get('/posts/{id}/edit', [PostsController::class, 'edit']);
Route::patch('/posts/{id}', [PostsController::class, 'update']);
Route::delete('/posts/{id}/delete', [PostsController::class, 'destroy']);


Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
 
    return "Cleared!";
 
 });

