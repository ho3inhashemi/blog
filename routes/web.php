<?php

use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\fileExists;

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
    return view('posts');
});

Route::get('/post/{slug}' , function ($slug){

    $path = __DIR__. '/../resources/posts/'.$slug.'.html' ;

    !file_exists($path) ? abort(404) : $path ; 

    return view('post',[
        'post' => file_get_contents($path)
    ]);
});