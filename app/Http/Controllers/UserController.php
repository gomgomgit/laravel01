<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Encryption\DecryptException;

class UserController extends Controller
{
    public function index()
    {
    	$data['user'] = User::orderBy('id', 'desc')->paginate(3);
    	return view('user.index', $data);
    }

    public function create()
    {
    	return view('user.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required'
        ]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->password = encrypt($request->password);
    	$user->email = $request->email;
    	$user->alamat = $request->alamat;
    	$user->tanggal_lahir = $request->tanggal_lahir;

    	$user->save();

    	return redirect('/user')->with('store', 'Berhasil menambahkan user baru');
    }

    public function edit($id, Request $request)
    {
    	$user['user'] = User::find($id);

    	return view('user.edit', $user);
    }

    public function update($id, Request $request)
    {
    	$user = User::find($id);
    	$user->name = $request->name;
    	$user->password = encript($request->password);
    	$user->email = $request->email;
    	$user->alamat = $request->alamat;
    	$user->tanggal_lahir = $request->tanggal_lahir;
    	$user->save();

    	return redirect('/user')->with('update', 'Berhasil mengedit user');
    }

    public function delete($id)
    {
    	$data = User::find($id);
    	$data->delete();

    	return redirect('/user')->with('delete', 'Berhasil menghapus user');
    }

}
