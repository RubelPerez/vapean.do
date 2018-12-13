<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liquidController extends Controller
{
    public function index()
    {
        return view('liquids');
    }
}
