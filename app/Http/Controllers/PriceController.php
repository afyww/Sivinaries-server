<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Price;
use App\Models\Project;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index()
    {
        $price = Price::all();

        return view('price', ['price' => $price]);
    }

    public function create()
    {
        $user = User::all();
        $project = Project::all();
        return view('addprice', ['user' => $user, 'project' => $project]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'service' => 'required',
            'user_id' => 'required',
            'project_id' => 'required',
            'price' => 'required',
        ]);

        $data = [
            'service' => $request->input('service'),
            'user_id' => $request->input('user_id'),
            'project_id' => $request->input('project_id'),
            'price' => $request->input('price'),
        ];

        Price::create($data);

        return redirect()->route('price')->with('success', 'Price Sukses Dibuat!');

    }

    public function edit($id)
    {
        $price = Price::find($id);
        $user = User::all();
        $project = Project::all();

        return view('editprice', ['price' => $price, 'user' => $user, 'project' => $project]);

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
        Price::destroy($id);

        return redirect()->route('price')->with('success', 'Price Sukses Dihapus!');

    }
}
