<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();

        if (request()->is('api/*')) {
            return response()->json($user);
        }

        return view('user', compact('user'));
    }

    public function create()
    {
        return view('adduser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8|confirmed',
            'level' => 'required|string|in:admin,writer',
        ]);

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->level = $validatedData['level'];
        $user->save();

        return redirect('/user')->with('success', 'User Berhasil Dibuat !');
    }

    public function edit($id)
    {

        $user = User::find($id);
        return view('edituser', ['user' => $user]);

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',
        ]);

        $userdata = $request->only(['category']);

        User::where('id', $id)->update($userdata);

        return redirect(route('user'))->with('success', 'User Berhasil Diupdate !');

    }

    public function destroy($id)
    {
        User::destroy($id);

        return redirect(route('user'))->with('success', 'User Berhasil Dihapus !');

    }

}
