<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiturPosController extends Controller
{
    public function index()
    {
        return view('pages.diko_pos.fitur.list');
    }
}
