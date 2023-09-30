<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginSpController extends Controller
{
    public function index()
    {
        return view('pages.diko_sp.plug.list');
    }
}
