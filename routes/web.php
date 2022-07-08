<?php

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
})->name('welcome');

Route::get('/users/{id?}/post/{article_name?}',function($id=null,$article_name="None"){
    return "This is user page for $id and $article_name";
})->whereNumber('id')->whereAlpha('article_name');

Route::get('/products',function(){
    return "This is products page";
})->name('products');

Route::get('/search',function(){
    return to_route('welcome');
});
