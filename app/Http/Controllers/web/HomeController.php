<?php

namespace App\Http\Controllers\web;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        $data['articles']= Article::all();
        return view('web.home.index')->with($data);
    }
}
