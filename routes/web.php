<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mime\Encoder\ContentEncoderInterface;

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

    $posts = Post::all();
    
    return view('posts' ,['posts' => $posts] );

});

Route::get('/post/{post}' , function ($slug){
    
    return view('post',[
        'post' => Post::find($slug)
        ]);
    })->where('post' , '[A-z_/-]+');