<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataUserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $posts = User::get();
        return view('data_user.list', compact('posts', 'user'));
    }

    public function create()
    {
        return view('landing.fitur.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $post = new User();
        $post->name = $request->input('name');
        $post->email = $request->input('email');
        $post->password = $request->input('password');

        $post->save();

        return redirect('/data_user')->with('success', 'User has been added.');
    }

    public function edit($id)
    {
        $post = User::find($id);
        return view('data_user.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'edit_name' => 'required',
            'edit_email' => 'required',
            'edit_password' => 'required',
        ]);

        $post = User::find($id);

        if (!$post) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $post->name = $request->input('edit_name');
        $post->email = $request->input('edit_email');
        $post->password = $request->input('edit_password');

        $post->save();

        return redirect('/data_user')->with('success', 'User has been edited.');
    }

    public function destroy($id)
    {
        $post = User::find($id);

        if ($post) {
            $post->delete();
            return redirect('/data_user')->with('success', 'User has been deleted.');
        } else {
            return redirect('/data_user')->with('error', 'User not found.');
        }
    }
}
