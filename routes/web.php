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

//home
//Route::get('/', 'PagesController@index');

//home
Route::get('/',[
    'uses' => 'PagesCOntroller@index',
    'as' => 'home'
]);

//dashboard
Route::get('/dashboard',[
    'uses' => 'DashboardController@index',
    'as' => 'dashboard'
]);

//create
Route::get('/post/create',[
    'uses' => 'PostsController@create',
    'as' => 'post.create'
]);
//create|store
Route::post('/post/store',[
    'uses' => 'PostsController@store',
    'as' => 'post.store'
]);
//read
Route::get('/blog',[
    'uses' => 'PostsController@index',
    'as' => 'blog'
]);
//read|show
Route::get('/post/{id}',[
    'uses' => 'PostsController@show',
    'as' => 'post.show'
]);
//update
Route::get('/post/edit/{id}',[
    'uses' => 'PostsController@edit',
    'as' => 'post.edit'
]);
//update|update
Route::put('/post/update/{id}',[
    'uses' => 'PostsController@update',
    'as' => 'post.update'
]);
//delete
Route::delete('/post/delete/{id}',[
    'uses' => 'PostsController@destroy',
    'as' => 'post.delete'
]);

/*
Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user '.$name.' with an ID of '.$id;
});
*/
Auth::routes();