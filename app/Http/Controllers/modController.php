<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class modController extends Controller
{
    public function index()
    {
        return view('mods');
    }
}
