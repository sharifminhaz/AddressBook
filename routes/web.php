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

Route::get('/edit', function () {
    return view('edit');
});
Route::get('/AddNew', function () {
    return view('AddFile');
});
Route::get('/', 'contactController@index')->name('home');

//Add new crud
Route::post('/posts','postController@posts')->name('posts');
Route::get('/post/delete/{id}', 'postController@destroy');
