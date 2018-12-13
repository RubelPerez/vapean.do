<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\battery;
class accesoryController extends Controller
{
    public function index()
    {
       $accesories = battery::Paginate(5);
        return view('accesories')->with(compact('accesories'));
    }
   public function admin()
    {
    	$accesory = battery::Paginate(5);
        return view('admin.accesories.index')->with(compact('accesory'));
    }
}
