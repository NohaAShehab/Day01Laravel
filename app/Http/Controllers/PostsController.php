<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;


class PostsController extends Controller
{
    //
    public function show($title){
    //     $posts =[
    //         'my-first-post'=> 'Welcome to first post', 
    //         'my-second-post'=> 'Welcome to second post', 
    //     ]; 

        #let's do this using database

        #$post= DB::table('posts')->where('title',$title)->first();

        # after using the model
        $post= Post::where('title',$title)->first();

        dd($post);
        
        if(! array_key_exists($title, $posts)){
            abort(404,"Sorry post key not found");
        }
        # let's pass it to the view
        return view('internals.post',[
            'post'=> $posts[$title],
        ]);
    }

   























}
