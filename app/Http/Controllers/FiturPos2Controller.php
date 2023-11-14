<?php

namespace App\Http\Controllers;

use App\Models\FiturPos2;
use Illuminate\Http\Request;

class FiturPos2Controller extends Controller
{
    public function index()
    {
        $posts = FiturPos2::get();
        return view('pages.diko_pos.fitur.list2', compact('posts'));
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

        $pos2 = new FiturPos2();
        $pos2->icon2 = $request->input('icon2');
        $pos2->judul_icon2 = $request->input('judul_icon2');
        $pos2->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $pos2->image = str_replace('public/', '', $imagePath);
        }

        $pos2->save();

        return redirect('/pos/fitur2/list')->with('success', 'Features has been added.');
    }

    public function show($id_fitursection2)
    {
        $pos2 = FiturPos2::all();
        return view('pages.diko_pos.fitur.list2', compact('pos2'));
    }

    public function preview()
    {
        $pos2 = FiturPos2::all();
        return view('pages.diko_pos.fitur.preview', compact('pos2'));
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
        $pos2 = FiturPos2::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_icon2')) {
            $pos2->icon2 = $request->input('edit_icon2');
        }

        if ($request->has('edit_judul_icon2')) {
            $pos2->judul_icon2 = $request->input('edit_judul_icon2');
        }

        if ($request->has('edit_isi')) {
            $pos2->isi = $request->input('edit_isi');
        }
        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $pos2->image = str_replace('public/', '', $imagePath);
        }

        $pos2->save();

        return redirect('/pos/fitur2/list')->with('success', 'Features has been edited.');
    }

    public function destroy($id_fitursection2)
    {
        $pos2 = FiturPos2::find($id_fitursection2);
        $pos2->delete();

        return redirect('/pos/fitur2/list')->with('success', 'Features has been deleted.');
    }
}
