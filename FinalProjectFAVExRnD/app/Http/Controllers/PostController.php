<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function index(){
        return view('articles', [
            "tittle" => 'articles',
            "articles" => Post::all()
        ]);

    }

    public function show($id){
        return view('post', [
            "tittle" => 'post',
            "post" => Post::find($id)
        ]);
    }
}
