<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqPosController extends Controller
{
    public function index()
    {
        return view('pages.diko_pos.faq.list');
    }
}
