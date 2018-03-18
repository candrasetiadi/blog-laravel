<?php

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
    return redirect('/post');
});

Route::get('/post', ['uses' => 'BlogController@blog'])->name('post');
Route::get('/post-detail/{slug}', ['uses' => 'BlogController@posts'])->name('post-detail');
Route::get('/post-create', ['uses' => 'BlogController@create'])->name('post-create');
Route::post('/post-submit', ['uses' => 'BlogController@store'])->name('post-submit');