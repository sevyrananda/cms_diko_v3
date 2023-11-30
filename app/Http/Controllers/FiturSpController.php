<?php

namespace App\Http\Controllers;

use App\Models\FiturSp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FiturSpController extends Controller
{
    public function index()
    {
        $fitur = FiturSp::get();
        $user = Auth::user();
        return view('pages.diko_sp.fitur.list', compact('fitur', 'user'));
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

        $sp = new FiturSp();
        $sp->icon1 = $request->input('icon1');
        $sp->judul_icon1 = $request->input('judul_icon1');
        $sp->judul_detail = $request->input('judul_detail');
        $sp->isi_detail = $request->input('isi_detail');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $sp->image = str_replace('public/', '', $imagePath);
        }

        $sp->save();

        return redirect('/sp/fitur/list')->with('success', 'Fitur Section 1 Berhasil Ditambahkan.');
    }

    public function preview($id)
    {
        $fitur = FiturSp::find($id);
        return view('pages.diko_sp.fitur.preview', compact('fitur'));
    }

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
        $sp = FiturSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        if ($request->has('edit_icon1')) {
            $sp->icon1 = $request->input('edit_icon1');
        }
        if ($request->has('edit_judul_icon1')) {
            $sp->judul_icon1 = $request->input('edit_judul_icon1');
        }
        if ($request->has('edit_judul_detail')) {
            $sp->judul_detail = $request->input('edit_judul_detail');
        }
        if ($request->has('edit_isi_detail')) {
            $sp->isi_detail = $request->input('edit_isi_detail');
        }

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $sp->image = str_replace('public/', '', $imagePath);
        }

        $sp->save();

        return redirect('/sp/fitur/list')->with('success', 'Fitur Section 1 Berhasil Diupdate.');
    }

    public function destroy($id)
    {
        $sp = FiturSp::find($id);
        $sp->delete();

        return redirect('/sp/fitur/list')->with('success', 'Fitur Section 1 Berhasil Dihapus!.');
    }
}
