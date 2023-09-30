<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginPosController extends Controller
{
    public function index()
    {
        return view('pages.diko_pos.plug.list');
    }
}
