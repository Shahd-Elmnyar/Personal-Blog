<?php

namespace App\Http\Controllers\admin;

use Exception;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $data['articles'] = Article::orderBy('id', 'DESC')->paginate(10);
        return view('/admin/dashboard/article/index')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
            'img'=>'required|image',
        ]);
        $path = Storage::putFile('images',$request->file('img'));
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'img' => $path,
        ]);
        session()->flash('msg','row added successfully');
        return back();
    }
    public function delete(Article $article, Request $request)
    {
        try {
            $isDeleted = $article->delete();
            $msg = 'row deleted successfully';
        } catch (Exception $e) {
            $msg = 'can not delete this article';
        }
        session()->flash('msg', $msg);
        return back();
    }
    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:articles,id',
            'title' => 'required|string',
            'content' => 'required|string',
        ]);
        //  dd($request->id);
        Article::findOrFail($request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        session()->flash('msg', 'row updated successfully');
        return back();
    }
}
