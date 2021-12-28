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

Route::get('/post/{post}' , function ($slug){

    $path = __DIR__. '/../resources/posts/'.$slug.'.html' ;

    if(!file_exists($path)){
        return redirect('/');
    } 

    return view('post',[
        'post' => file_get_contents($path)
    ]);
})->where('post' , '[A-z_/-]+');