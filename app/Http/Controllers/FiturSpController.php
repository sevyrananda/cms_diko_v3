<?php

namespace App\Http\Controllers;

use App\Models\FiturSp;
use Illuminate\Http\Request;

class FiturSpController extends Controller
{
    public function index()
    {
        $posts = FiturSp::get();
        return view('pages.diko_sp.fitur.list', compact('posts'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new FiturSp();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/sp/fitur/list')->with('success', 'Features has been added.');
    }

    public function show($id)
    {
        $post = FiturSp::all();
        return view('pages.diko_sp.fitur.list', compact('post'));
    }

    public function preview($id)
    {
        $post = FiturSp::find($id);
        return view('pages.diko_sp.fitur.preview', compact('post'));
    }

    public function edit($id)
    {
        $post = FiturSp::find($id);
        return view('pages.diko_sp.fitur.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_judul' => 'required',
            'edit_isi' => 'required',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $post = FiturSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->judul = $request->input('edit_judul');
        $post->isi = $request->input('edit_isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/sp/fitur/list')->with('success', 'Features has been edited.');
    }

    public function destroy($id)
    {
        $post = FiturSp::find($id);
        $post->delete();

        return redirect('/sp/fitur/list')->with('success', 'Features has been deleted.');
    }
}
