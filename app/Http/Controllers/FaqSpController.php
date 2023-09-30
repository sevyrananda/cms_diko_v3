<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqSpController extends Controller
{
    public function index()
    {
        return view('pages.diko_sp.faq.list');
    }
}
