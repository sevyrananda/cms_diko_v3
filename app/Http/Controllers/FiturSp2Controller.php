<?php

namespace App\Http\Controllers;

use App\Models\FiturSp2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiturSp2Controller extends Controller
{
    public function index()
    {
        $fitur2 = FiturSp2::get();
        $user = Auth::user();
        return view('pages.diko_sp.fitur.list2', compact('fitur2', 'user'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'icon2' => 'required',
            'judul_icon2' => 'required',
            'isi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $sp2 = new FiturSp2();
        $sp2->icon2 = $request->input('icon2');
        $sp2->judul_icon2 = $request->input('judul_icon2');
        $sp2->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $sp2->image = str_replace('public/', '', $imagePath);
        }

        $sp2->save();

        return redirect('/sp/fitur2/list')->with('success', 'Features has been added.');
    }

    public function show($id)
    {
        $fitur2 = FiturSp2::all();
        return view('pages.diko_sp.fitur.list2', compact('fitur2'));
    }

    public function preview($id)
    {
        $fitur2 = FiturSp2::find($id);
        return view('pages.diko_sp.fitur.preview2', compact('fitur2'));
    }

    // public function edit($id)
    // {
    //     $pos2 = FiturPos2::find($id);
    //     return view('pages.diko_pos.fitur.edit', compact('pos2'));
    // }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_icon2' => 'nullable',
            'edit_judul_icon2' => 'nullable',
            'edit_isi' => 'nullable',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $sp2 = FiturSp2::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_icon2')) {
            $sp2->icon2 = $request->input('edit_icon2');
        }

        if ($request->has('edit_judul_icon2')) {
            $sp2->judul_icon2 = $request->input('edit_judul_icon2');
        }

        if ($request->has('edit_isi')) {
            $sp2->isi = $request->input('edit_isi');
        }
        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $sp2->image = str_replace('public/', '', $imagePath);
        }

        $sp2->save();

        return redirect('/sp/fitur2/list')->with('success', 'Features has been edited.');
    }

    public function destroy($id)
    {
        $sp2 = FiturSp2::find($id);
        $sp2->delete();

        return redirect('/sp/fitur2/list')->with('success', 'Features has been deleted.');
    }
}
