<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kit;
class kitController extends Controller
{
  public function index()
    {
        $kit = Kit::Paginate(5);
        return view('kits')->with(compact('kit'));
    }

   public function admin()
    {
    	$kits = Kit::Paginate(5);
        return view('admin.kits.index')->with(compact('kits'));
    }
}
