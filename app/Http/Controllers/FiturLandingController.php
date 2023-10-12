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

        return redirect('/landing/fitur')->with('success', 'Features has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = FiturLanding::all();
        return view('pages.landing.fitur.list', compact('post'));
    }

    public function preview()
    {
        $posts = FiturLanding::all();
        return view('pages.landing.fitur.preview', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $posts = FiturLanding::find($id);
        return view('pages.landing.fitur.edit', compact('posts'));
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
            'edit_icon' => 'required',
        ]);

        // Temukan data post berdasarkan ID
        $post = FiturLanding::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->judul = $request->input('edit_judul');
        $post->isi = $request->input('edit_isi');
        $post->icon = $request->input('edit_icon');

        $post->save();

        return redirect('/landing/fitur')->with('success', 'Features has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = FiturLanding::find($id);
        $post->delete();

        return redirect('/landing/fitur')->with('success', 'Features has been deleted.');
    }
}
