<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PricingSpController extends Controller
{
    public function index()
    {
        return view('pages.diko_sp.pricing.list');
    }
}
