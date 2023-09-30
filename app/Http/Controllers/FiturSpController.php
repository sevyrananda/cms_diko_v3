<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiturSpController extends Controller
{
    public function index()
    {
        return view('pages.diko_sp.fitur.list');
    }
}
