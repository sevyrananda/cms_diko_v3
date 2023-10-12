<?php

namespace App\Http\Controllers;

use App\Models\FiturPos;
use Illuminate\Http\Request;

class FiturPosController extends Controller
{
    public function index()
    {
        $posts = FiturPos::get();
        return view('pages.diko_pos.fitur.list', compact('posts'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'icon1' => 'required',
            'judul_icon1' => 'required',
            'judul_detail' => 'required',
            'isi_detail' => 'required',
            'icon2' => 'required',
            'judul_icon2' => 'required',
            'isi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new FiturPos();
        $post->icon1 = $request->input('icon1');
        $post->judul_icon1 = $request->input('judul_icon1');
        $post->judul_detail = $request->input('judul_detail');
        $post->isi_detail = $request->input('isi_detail');
        $post->icon2 = $request->input('icon2');
        $post->judul_icon2 = $request->input('judul_icon2');
        $post->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/pos/fitur/list')->with('success', 'Features has been added.');
    }

    public function show($id)
    {
        $post = FiturPos::all();
        return view('pages.diko_pos.fitur.list', compact('post'));
    }

    public function preview()
    {
        $post = FiturPos::all();
        return view('pages.diko_pos.fitur.preview', compact('post'));
    }

    public function edit($id)
    {
        $post = FiturPos::find($id);
        return view('pages.diko_pos.fitur.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_icon1' => 'required',
            'edit_judul_icon1' => 'required',
            'edit_judul_detail' => 'required',
            'edit_isi_detail' => 'required',
            'edit_icon2' => 'required',
            'edit_judul_icon2' => 'required',
            'edit_isi' => 'required',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $post = FiturPos::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->icon1 = $request->input('edit_icon1');
        $post->judul_icon1 = $request->input('edit_judul_icon1');
        $post->judul_detail = $request->input('edit_judul_detail');
        $post->isi_detail = $request->input('edit_isi_detail');
        $post->icon2 = $request->input('edit_icon2');
        $post->judul_icon2 = $request->input('edit_judul_icon2');
        $post->isi = $request->input('edit_isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/pos/fitur/list')->with('success', 'Features has been edited.');
    }

    public function destroy($id)
    {
        $post = FiturPos::find($id);
        $post->delete();

        return redirect('/pos/fitur/list')->with('success', 'Features has been deleted.');
    }
}
