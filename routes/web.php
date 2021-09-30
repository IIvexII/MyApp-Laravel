<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
//                       POST ROUTES
//----------------------------------------------------------------
/*
\---------------------------------
\   Route: index page
\---------------------------------
*/
Route::get('/', fn()=>redirect('/posts'));

/*
\---------------------------------
\   Route: Search a Post by ID
\---------------------------------
*/
Route::post('/search', [PostController::class, 'searchById']); 
Route::get('/search', fn() => redirect('/')); // redirect to index page on get request


/*
\----------------------------------------
\  Route: Show All Posts on Index Page
\----------------------------------------
*/
Route::get('/posts', [PostController::class, 'showAllPosts']);

/*
\---------------------------------
\        Route: Create Post
\---------------------------------
*/
Route::get('/post/create', [UserController::class, 'showPostForm']);   // show create post form on get request
Route::post('/post/create', [PostController::class, 'createPost']); // Go to controller on post request

/*
\---------------------------------
\        Route: Update Post
\---------------------------------
*/
Route::get('/post/update', fn()=>redirect('/') );  
// show post data in the form to update
Route::get('/post/update/{id}', [PostController::class, 'showDataForUpdate']);  
Route::post('/post/update', [PostController::class, 'updatePost']);

/*
\---------------------------------
\        Route: Delete Post
\---------------------------------
*/
Route::get('/post/delete', fn()=>redirect('/') );  
// delete data on post request
Route::get('/post/delete/{id}', [PostController::class, 'deletePost']);

//                        USER ROUTES
//----------------------------------------------------------------

/*
\---------------------------------
\        Route: User Posts
\---------------------------------
*/
// Show All Users
Route::get('/users', [UserController::class, 'showAllUsers']);
// Show all posts by the user
Route::get('/user/{id}/posts', [UserController::class, 'userPosts']);

/*
\---------------------------------
\        Route: Create User
\---------------------------------
*/
Route::view('/user/create', 'createUserForm');
Route::post('/user/create', [UserController::class, 'createUser']);

