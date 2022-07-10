<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

// Route::get('/users/{id?}/post/{article_name?}',function($id=null,$article_name="None"){
//     return "This is user page for $id and $article_name";
// })->whereNumber('id')->whereAlpha('article_name');

// Route::get('/products',function(){
//     return "This is products page";
// })->name('products');

// Route::get('/search',function(){
//     return to_route('welcome');
// });

// Route::get('/users',[UserController::class,'index']);
// Route::get('users/{name}',[UserController::class,'show']);

// Route::controller(UserController::class)->group(function(){
//     Route::get('/users','index');
//     Route::get('/users/{name}','show');
// });

// Route::name('users.')->group(function(){
//     Route::get('/users',[UserController::class,'index']);
//     Route::get('/users/{name}',[UserController::class,'show']);
// });

// Route::prefix('admin')->group(function(){
//     Route::get('/dashboard',[AdminController::class,'dashboard']);
// });


// Route::get('/products',[ProductController::class,'index']);

// // Route::get('/products',function(){
// //     return view('products.index');
// // });

// Route::view('/products','products.index');

// Route::view('/test','test');

Route::view('/','home')->name( 'home');
Route::view('/about','about')->name( 'about');
Route::view('/contact', 'contact')->name('contact');

Route::post('/blog',[BlogController::class,'store'])->name('blog.store');
