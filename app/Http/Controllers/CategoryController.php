<?php
namespace App\Http\Controllers; 

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
    	$data['category'] = Category::orderBy('id', 'desc')->get();
    	return view('category.index', $data);
    }

    public function create()
    {
    	return view('category.create');
    }

    public function store(Request $request) 
    {
    	$data 	= new Category;
    	$data->name = $request->name;

    	// $data->name = request('name');

    	$data->save();

    	return redirect('/category')->with('store', 'Berhasil menambahkan category baru'); 
    }

    public function delete($id)
    {
    	// $data = new Category;
    	// $data->where('id', $id)->delete();

    	$data = Category::find($id);
    	$data->delete();

    	return redirect('category')->with('delete', 'Berhasil menghapus category');
    }

    public function edit($id) {
    	// $data = new Category;
    	// $category = $data->where('id', $id)->get();
    	$category = Category::find($id);
    	return view('category.edit', ['category' => $category]);
    }

    public function update($id, Request $request)
    {
    	// DB::table('category')->where('id', $request->id)->update([
    	// 'name' => $request->name
    	// ]);
     //    $data = new Category;
     //    $data->where('id', $request->id);
     //    $data->name = $request->name;
     //    $data->save();
    	// return redirect('category');

    	$this->validate($request, [
    		'name' => 'required'
    	]);

    	$data = Category::find($id);
    	$data->name = $request->name;
    	$data->save();
    	return redirect('category')->with('update', 'Berhasil mengedit category');
    }
}
