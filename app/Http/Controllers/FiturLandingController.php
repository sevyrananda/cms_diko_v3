<?php

namespace App\Http\Controllers;

use App\Models\FiturLanding;
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
    // public function create()
    // {
    //     return view('landing.fitur.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $post = new FiturLanding();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/fitur')->with('success', 'Post has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FiturLanding::all();
        return view('pages.landing.fitur.list', compact('post'));
    }

    public function preview($id)
    {
        $post = FiturLanding::find($id);
        return view('pages.landing.fitur.preview', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = FiturLanding::find($id);
        return view('pages.landing.fitur.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_judul' => 'required',
            'edit_isi' => 'required',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan data post berdasarkan ID
        $post = FiturLanding::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->judul = $request->input('edit_judul');
        $post->isi = $request->input('edit_isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/fitur')->with('success', 'Post has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FiturLanding::find($id);
        $post->delete();

        return redirect('/fitur')->with('success', 'Activity has been deleted.');
    }
}
