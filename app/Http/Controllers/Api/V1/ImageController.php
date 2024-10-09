<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    function index(){
        /*
        $post = Blog::all();
        return response()->json($post);*/

        return '{"imagePath":"something.jpg"}';
    }

    function store(Request $request){
        /*
        $post = new Blog();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->author_id = $request->author_id;
        $post->save();
        return response()->json($post, 201);*/

        return '{"imagePath":"something post.jpg"}';
    }

}
