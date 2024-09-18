<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        return view('user', ['user' => $user]);
    }

    public function create()
    {
        return view('adduser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'level' => 'required|string|in:admin,user',
        ]);
    
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'level' => $request->input('level'),
        ];
    
        User::create($data);
    
        return redirect()->route('user')->with('success', 'User Berhasil Dibuat !');
    }
    
    public function edit($id)
    {

        $user = User::find($id);
        return view('edituser', ['user' => $user]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'service' => 'required',
            'user_id' => 'required',
            'project_id' => 'required',
            'price' => 'required',
        ]);

        $price = Price::findOrFail($id);

        $price->service = $request->input('service');
        $price->user_id = $request->input('user_id');
        $price->project_id = $request->input('project_id');
        $price->price = $request->input('price');

        $price->save();

        return redirect()->route('price')->with('success', 'Price Sukses Diupdate!');
    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect(route('user'))->with('success', 'User Berhasil Dihapus !');

    }

}
