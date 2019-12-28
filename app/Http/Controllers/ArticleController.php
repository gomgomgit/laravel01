<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    public function index()
    {
    	$data = Article::all();
    	return view('article.index',['article' => $data]); 
    }

    public function create()
    {
    	$data['category'] = Category::orderBy('name')->get();
    	return view('article.create', $data);
    }

    public function store(Request $request)
    {
    	$data = new Article;

    	$data->category_id = $request->category;
    	$data->title = $request->title;
    	$data->content = $request->content;
    	$data->created_by = $request->cby;
    	$data->status = $request->status;

    	$data->save();
    	return redirect('/article')->with('store', 'Berhasil menambahkan article baru'); 
    }

    public function edit($id)
    {
    	$article['category'] = Category::orderBy('name')->get();
    	$article['article'] = Article::find($id);
    	return view('article.edit', $article);
    }

    public function update($id, Request $request)
    {
    	$article = Article::find($id);

    	$article->category_id = $request->category;
    	$article->title = $request->title;
    	$article->content = $request->content;
    	$article->created_by = $request->cby;
    	$article->status = $request->status;

    	$article->save();
    	return redirect('article')->with('update', 'Berhasil mengedit article'); 
    }

    public function delete($id)
    {
    	$data = Article::find($id);
    	$data->delete();

    	return redirect('/article')->with('delete', 'Berhasil menghapus article'); 
    }
}
