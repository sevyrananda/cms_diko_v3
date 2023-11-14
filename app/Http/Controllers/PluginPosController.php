<?php

namespace App\Http\Controllers;

use App\Models\PluginPos;
use Illuminate\Http\Request;

class PluginPosController extends Controller
{
    public function index()
    {
        $posts = PluginPos::get();
        return view('pages.diko_pos.plug.list', compact('posts'));
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

        $post = new PluginPos();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/pos/plugin/list')->with('success', 'Post has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function showPosts($id)
    {
        $posts = PluginPos::all();
        return view('pages.diko_pos.plug.list', compact('posts'));
    }

    public function previewalldata()
    {
        $posts = PluginPos::all();
        return view('pages.diko_pos.plug.previewalldata', compact('posts'));
    }

    public function preview($id)
    {
        $posts = PluginPos::all();
        $post = PluginPos::find($id);
        return view('pages.diko_pos.plug.preview', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = PluginPos::find($id);
        return view('pages.diko_pos.plug.edit', compact('post'));
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
        $post = PluginPos::find($id);

        // Periksa apakah post ditemukan
    if (!$post) {
        return redirect()->back()->with('error', 'Post not found.');
    }

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->judul = $request->input('edit_judul');
        $post->isi = $request->input('edit_isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/pos/plugin/list')->with('success', 'Post has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $post = PluginPos::find($id);

    if ($post) {
        $post->delete();
        return redirect('/pos/plugin/list')->with('success', 'Activity has been deleted.');
    } else {
        return redirect('/pos/plugin/list')->with('error', 'Activity not found.');
    }
}

}
