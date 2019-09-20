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

Route::get('test', function() {
    return view('test', [
        'name'=>request('name')
    ]);
});

Route::get('/posts/{post}', function($post){

    $posts = [
        'first_post' => 'blah blah blah',
        'second_post' => 'blah2 blah2 blah2'
    ];

    if(!array_key_exists($post, $posts)){
        abort(404, 'Post Not found');
    }

    return view('post',['post'=> $posts[$post]]);
});
