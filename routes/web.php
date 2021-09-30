<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\DB;
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

/*
\----------------------------------------
\  Route: Show All Posts on Index Page
\----------------------------------------
*/
Route::get('/', [PostController::class, 'showAllPosts']);

/*
\---------------------------------
\   Route: Search a Post by ID
\---------------------------------
*/
Route::post('/search', [PostController::class, 'searchById']); 
Route::get('/search', fn() => redirect('/')); // redirect to index page on get request

/*
\---------------------------------
\        Route: Create Post
\---------------------------------
*/
Route::view('/create', 'createForm');   // show create post form on get request
Route::post('/create', [PostController::class, 'createPost']); // Go to controller on post request

/*
\---------------------------------
\        Route: Update Post
\---------------------------------
*/
Route::get('/update', fn()=>redirect('/') );  
// show post data in the form to update
Route::get('/update/{id}', [PostController::class, 'showDataForUpdate']);  
Route::post('/update', [PostController::class, 'updatePost']);

/*
\---------------------------------
\        Route: Delete Post
\---------------------------------
*/
Route::get('/delete', fn()=>redirect('/') );  
// delete data on post request
Route::get('/delete/{id}', [PostController::class, 'deletePost']);