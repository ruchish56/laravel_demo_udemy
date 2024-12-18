<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/', function () {
    return view('home.index',[]);
})->name('home.index');
Route::get('/contact', function () {
    return view('home.contact',[]);
})->name('home.contact');
*/

//Route::view('/', 'home.index')->name('home.index');
//Route::view('/contact', 'home.contact')->name('home.contact');

Route::get('/', [HomeController::class, 'home'])
    ->name('home.index');
Route::get('/contact', [HomeController::class, 'contact'])
    ->name('home.contact');


Route::resource('posts', PostController::class)
     ->only('create','index','show','store','edit','update','destroy');
//     ->except('destroy');

Route::get('/posts/show/{id}', [PostController::class, 'show']);

/*$posts = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a short intro to Laravel',
        'is_new' => 'true'
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => 'false'
    ],
    3 => [
        'title' => 'Intro to Java',
        'content' => 'This is a short intro to Java',
        'is_new' => 'false'
    ]
];

Route::get('/posts/{id}', function ($id) use($posts) {
    abort_if(!isset($posts[$id]), 404);

    return view('posts.show', ['posts' => $posts[$id]]);
});*/

// Route::get('/posts', function() use($posts) {
//     return view('/posts/index', ['posts' => $posts]);
// });

/*Route::get('/post/{id?}', function ($id = 10) {
    return "This is post Id: " . $id;
})->name('post');
Route::get('/post-test/{id?}', function ($id = 20) {
    return "This is post Id: " . $id;
})->where([
    'id' => '[0-9]+'
])->name('post-test');*/