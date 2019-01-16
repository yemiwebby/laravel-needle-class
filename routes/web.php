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
    return view('welcome');
});


Route::get('/sample', function() {
    return view('home.home');
});

Route::get('/sample/home/test', [
    'uses' => 'sampleController@showSamplePage',
    'as' => 'showPage'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Render post page
Route::get('/create/post', [
    'uses' => 'PostController@showPost',
    'as' => 'showPost'
])->middleware('auth');

Route::post('/submit/post', [
    'uses' => 'PostController@submitPost',
    'as' => 'submitPost'
]);

Route::get('/view/all/posts', [
    'uses' => 'PostController@viewPosts',
    'as' => 'showAllPosts'
]);

Route::get('/edit/post/{id}', [
    'uses' => 'PostController@editPost',
    'as' => 'editPost'
]);

Route::post('/post/edit/{id}', [
    'uses' => 'PostController@postEditForm',
    'as' => 'postEditForm'
]);

Route::get('/delete/post/{id}', [
    'uses' =>'PostController@deletePost',
    'as' => 'deletePost'
]);