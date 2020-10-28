<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function show(Article $article){
        return view('articles.show', compact('article'));
    }

    public function create(){
        $categories = Category::all();
        return view('articles.create', compact('categories'));
    }

    public function store(Request $request){
        //dd($request);
        $article = Article::create([
            'title' => request('title'),
            'body' => 'x',
            'category_id' => request('category'),
            'active' => request('active'),
            'article-trixFields' => request('article-trixFields'),
            'attachment-article-trixFields' => request('attachment-article-trixFields')
        ]);
        return redirect()->route('article.show', $article);
    }

    public function edit(Article $article){
        $categories = Category::all();
        return view('articles.edit', compact('article', 'categories'));
    }

    public function update(Article $article, Request $request){
        $article->update([
            'title' => request('title'),
            'body' => 'x',
            'category_id' => request('category'),
            'active' => request('active'),
            'article-trixFields' => request('article-trixFields'),
            'attachment-article-trixFields' => request('attachment-article-trixFields')
        ]);
        return redirect()->route('article.show', $article);
    }

    public function destroy(){
        ;
    }
}