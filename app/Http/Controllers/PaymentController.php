<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Project;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payment = Payment::all();

        return view('payment', ['payment' => $payment]);
    }

    public function create()
    {
        $project = Project::all();

        return view('addpayment', ['project' => $project]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'payment' => 'required',
            'project_id' => 'required',
            'price' => 'required',
            'prove' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        ]);

        $data = [
            'payment' => $request->input('payment'),
            'price' => $request->input('price'),
            'project_id' => $request->input('project_id'),
        ];

        if ($request->hasFile('prove')) {
            $uploadedImage = $request->file('prove');
            $imageName = time() . '_' . $uploadedImage->getClientOriginalName();
            $imagePath = $uploadedImage->storeAs('public/prove', $imageName);
            $data['prove'] = 'prove/' . $imageName;
        }

        Payment::create($data);

        return redirect()->route('payment')->with('success', 'Payment Sukses Dibuat!');

    }

    public function edit($id)
    {
        $payment = Payment::find($id);

        return view('editpayment', ['payment' => $payment]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'payment' => 'required',
            'project_id' => 'required',
            'price' => 'required',
            'prove' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $payment = Payment::findOrFail($id);

        $payment->payment = $request->input('payment');
        $payment->price = $request->input('price');
        $payment->project_id = $request->input('project_id');

        if ($request->hasFile('prove')) {
            $imageName = time() . '_' . $request->file('prove')->getClientOriginalName();
            $request->file('prove')->storeAs('public/prove', $imageName);
            $payment->prove = 'prove/' . $imageName;
        }

        $payment->save();

        return redirect()->route('payment')->with('success', 'Payment Sukses Diupdate!');
    
    }

    public function destroy($id)
    {
        Payment::destroy($id);

        return redirect()->route('payment')->with('success', 'Payment Sukses Dihapus!');

    }
}
