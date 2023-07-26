<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function welcome(){
        $articles = Article::take(4)->orderBy('created_at', 'desc')->get();
        return view('welcome', compact('articles'));
    }

    public function index()
    {
        $articles = Article::all()->sortDesc();
        return view('article.index', compact('articles'));
    }

    public function categoryShow(Category $category){
        return view('article.category', compact('category'));
    }
}
