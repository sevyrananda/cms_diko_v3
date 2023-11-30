<?php

namespace App\Http\Controllers;

use App\Models\PluginSp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PluginSpController extends Controller
{
    public function index()
    {
        $posts = PluginSp::get();
        $user = Auth::user();
        return view('pages.diko_sp.plug.list', compact('posts', 'user'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('landing.fitur.create');
    }

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

        $post = new PluginSp();
        $post->judul = $request->input('judul');
        $post->isi = $request->input('isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/sp/plugin/list')->with('success', 'Plugin has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function showPosts()
{
    $posts = PluginSp::all();
    return view('pages.diko_sp.plug.list', compact('posts'));
}

public function preview($id)
{
    $posts = PluginSp::all();  // Ambil semua post
    $post = PluginSp::find($id);  // Ambil post yang sesuai dengan $id
    return view('pages.diko_sp.plug.preview', compact('post', 'posts'));
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = PluginSp::find($id);
        return view('pages.diko_sp.plug.edit', compact('post'));
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
        $post = PluginSp::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->judul = $request->input('edit_judul');
        $post->isi = $request->input('edit_isi');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->save();

        return redirect('/sp/plugin/list')->with('success', 'Plugin has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = PluginSp::find($id);
        $post->delete();

        return redirect('/sp/plugin/list')->with('success', 'Plugin has been deleted.');
    }
}




