<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
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
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
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

        
        $article = Article::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $request->file('img')->store('public/img'),
            'category_id' => $request->category_id,
        ]);

        $tags = explode(',', $request->tags);

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag->id);
        }

        return redirect()->route('article.index')->with('message', 'Articolo inserito con successo');
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

    public function userShow(User $user){
        return view('article.user', compact('user'));
    }

    public function byCategory(Category $category){
        $articles = $category->articles->sortbyDesc('created_at')->filter(function ($article) {
            return $article->is_accepted == true;
        });
        return view('article.by-category', compact('articles', 'category'));
    }

    public function byWriter(User $writer){
        $articles = $writer->articles->sortbyDesc('created_at')->filter(function ($article) {
            return $article->is_accepted == true;
        });
        return view('article.by-user', compact('user', 'articles'));
    }

    public function articleSearch(Request $request){
        $query = $request->get('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }
}
