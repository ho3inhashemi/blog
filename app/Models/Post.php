<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post{



    public static function find($slug){

        if(!file_exists($path = resource_path("posts/$slug.html"))){            
            
            throw new ModelNotFoundException();

        }


        $post = cache()->remember("posts.{$slug}" , now()->addMonth(2) , fn() =>file_get_contents($path));

        return $post ;
    }


    public static function all(){

        $files =  File::files(resource_path('posts/'));

        return array_map(fn($file)=>$file->getContents() , $files);
    }

}
















?>