<?php

namespace App\Http\Controllers;

use App\Models\FiturPos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiturPosController extends Controller
{
    public function index()
    {
        $posts = FiturPos::get();
        $user = Auth::user();
        return view('pages.diko_pos.fitur.list', compact('posts', 'user'));
    }

    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'icon1' => 'required',
            'judul_icon1' => 'required',
            'judul_detail' => 'required',
            'isi_detail' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $pos = new FiturPos();
        $pos->icon1 = $request->input('icon1');
        $pos->judul_icon1 = $request->input('judul_icon1');
        $pos->judul_detail = $request->input('judul_detail');
        $pos->isi_detail = $request->input('isi_detail');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $pos->image = str_replace('public/', '', $imagePath);
        }

        $pos->save();

        return redirect('/pos/fitur/list')->with('success', 'Fitur Section 1 Berhasil Ditambahkan.');
    }

    public function show($id)
    {
        $posts = FiturPos::all();
        return view('pages.diko_pos.fitur.list', compact('posts'));
    }

    public function preview($id)
    {
        $posts = FiturPos::find($id);
        return view('pages.diko_pos.fitur.preview', compact('posts'));
    }


    // public function edit($id)
    // {
    //     $pos = FiturPos::find($id);
    //     return view('pages.diko_pos.fitur.edit', compact('pos'));
    // }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_icon1' => 'nullable',
            'edit_judul_icon1' => 'nullable',
            'edit_judul_detail' => 'nullable',
            'edit_isi_detail' => 'nullable',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $pos = FiturPos::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_icon1')) {
            $pos->icon1 = $request->input('edit_icon1');
        }
        if ($request->has('edit_judul_icon1')) {
            $pos->judul_icon1 = $request->input('edit_judul_icon1');
        }
        if ($request->has('edit_judul_detail')) {
            $pos->judul_detail = $request->input('edit_judul_detail');
        }
        if ($request->has('edit_isi_detail')) {
            $pos->isi_detail = $request->input('edit_isi_detail');
        }

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $pos->image = str_replace('public/', '', $imagePath);
        }

        $pos->save();

        return redirect('/pos/fitur/list')->with('success', 'Fitur Section 1 Berhasil Diupdate.');
    }

    public function destroy($id)
    {
        $pos = FiturPos::find($id);
        $pos->delete();

        return redirect('/pos/fitur/list')->with('success', 'Fitur Section 1 Berhasil Dihapus!.');
    }
}
