<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        Article::create(
            [
                'author' => Auth::user()->name,
                'user_id' => Auth::user()->id,
                'title' => $request->input('title'),
                'subtitle'=>$request->input('subtitle'),
                'body' => $request->input('body'),
                'category_id' => $request->category,
                'category_name' => $request->category,
                'img' => $request->has('img') ? $request->file('img')->store('public/cover') : '/img/background.jpg'
            ]
        );
        return redirect()->route('article.index')->with('message', 'articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' =>'required',
            'body' =>'required',
            'category' =>'required'
        ]);
        $article->update(
            [
                'author'=> Auth::user()->name,
                'title' => $request->input('title'),
                'body' => $request->input('body'),
                'category' => $request->input('category'),
                
            ]
        );
        return redirect()->route('welcome')->with('message', 'Articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
