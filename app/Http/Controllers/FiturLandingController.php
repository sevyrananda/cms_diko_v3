<?php

namespace App\Http\Controllers;

use App\Models\FiturLanding;
use App\Models\FiturPos;
use App\Models\FiturPos2;
use App\Models\FaqLanding;
use App\Models\Produk;
use Illuminate\Http\Request;


class FiturLandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = FiturLanding::get();
        return view('pages.landing.fitur.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'icon' => 'required',
        ]);

        $post = new FiturLanding();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');
        $post->icon = $request->input('icon');

        $post->save();

        return redirect('/landing/fitur')->with('success', 'Fitur Utama Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id_fitur)
    {
        $posts = FiturLanding::all();
        $pos = FiturPos::all();
        $pos2 = FiturPos2::all();
        return view('pages.landing.fitur.show', compact('posts', 'pos', 'pos2'));
    }

    public function preview()
    {
        $posts = FiturLanding::all();
        $faq = FaqLanding::all();
        $products = Produk::all();
        return view('pages.landing.fitur.preview', compact('posts', 'faq', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit($id)
    // {
    //     $posts = FiturLanding::find($id);
    //     return view('pages.landing.fitur.edit', compact('posts'));
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_fitur)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_judul' => 'nullable',
            'edit_isi' => 'nullable',
            'edit_icon' => 'nullable',
        ]);

        // Temukan data post berdasarkan ID
        $post = FiturLanding::find($id_fitur);

        if ($request->has('edit_judul')) {
            $post->judul = $request->input('edit_judul');
        }

        if ($request->has('edit_isi')) {
            $post->isi = $request->input('edit_isi');
        }

        if ($request->has('edit_icon')) {
            $post->icon = $request->input('edit_icon');
        }

        $post->save();

        return redirect('/landing/fitur')->with('success', 'Fitur Utama Berhasil Diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_fitur)
    {
        $post = FiturLanding::find($id_fitur);
        $post->delete();

        return redirect('/landing/fitur')->with('success', 'Fitur Utama Berhasil Dihapus!.');
    }
}
