<?php

namespace App\Http\Controllers\web;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function index(){
        $data['articles']= Article::select('title','img','id')->get();
        return view('web.article.index')->with($data);
    }
    public function show(Article $article){
        $data['articles']= $article;
        return view('web.article.show')->with($data);
    }
}
