<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kitController extends Controller
{
 public function index()
    {
        return view('kits');
    }
}
