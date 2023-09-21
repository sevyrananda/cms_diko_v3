<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }

    public function post()
    {
        return view('pages.post');
    }

    public function listPost()
    {
        return view('pages.listPost');
    }
}
