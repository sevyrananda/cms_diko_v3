<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::get();
        return view('pagepost.list', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pagepost.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'author_name' => 'required',
            'title' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required',
        ]);

        $post = new Post;
        $post->author_name = $request->input('author_name');
        $post->title = $request->input('title');
        $post->category = $request->input('category');
        $post->content = $request->input('content');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->status = $request->input('status');

        $post->save();

        return redirect('/list')->with('success', 'Post has been added.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $post = Post::all();
        return view('pagepost.list', compact('post'));
    }

    public function preview($id)
    {
        $post = Post::find($id);
        return view('pagepost.preview', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('pagepost.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data
        $validatedData = $request->validate([
            'edit_author_name' => 'required',
            'edit_title' => 'required',
            'edit_category' => 'required',
            'edit_content' => 'required',
            'edit_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'edit_status' => 'required',
        ]);

        // Temukan data post berdasarkan ID
        $post = Post::find($id);

        // Perbarui data post berdasarkan data yang dikirimkan
        $post->author_name = $request->input('edit_author_name');
        $post->title = $request->input('edit_title');
        $post->category = $request->input('edit_category');
        $post->content = $request->input('edit_content');

        // Upload dan simpan gambar jika ada
        if ($request->hasFile('edit_image')) {
            $imagePath = $request->file('edit_image')->store('public');
            $post->image = str_replace('public/', '', $imagePath);
        }

        $post->status = $request->input('edit_status');

        $post->save();

        return redirect('/list')->with('success', 'Post has been edited.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/list')->with('success', 'Activity has been deleted.');
    }
}
