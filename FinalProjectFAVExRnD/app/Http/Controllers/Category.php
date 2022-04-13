<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Category;

class Category extends Controller
{

    public function index(){
        return view('category');

    }

    public function category(Category $category){
        return view('category', [
            'tittle' => $category->name,
            'post' => $category->posts,
            'category' => $category->name

        ]);
    }
}
