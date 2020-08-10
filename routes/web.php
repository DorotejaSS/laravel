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
});

Route::get('/about', function () {
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index');
Route::get('/articles/{article}', 'ArticlesController@show');


// Route::get('/articles', function () {
//     return view('articles.all', [
//         'articles' => App\Article::get()
//     ]);
// });

// Route::get('/test', function () {
//     return view('test');
// });


// Route::get('/', function () {
//     return view('test', [
//         'name' =>  request('name')
//     ]);
// });


//wildcards
// Route::get('/post/{post}', function ($post) {
//     $posts = [
//         'my-first-post' => 'Hello, this is my first blog',
//         'my-second-post' => 'Now I am getting the hang of this blogging thing'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found');
//     }

//     return view('post', [
//         'post' => $posts[$post] ?? 'Nothing here yet'
//     ]);
// });


//routing to controllers
// Route::get('/post/{post}', 'PostsController@show');
