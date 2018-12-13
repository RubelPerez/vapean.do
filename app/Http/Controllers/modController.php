<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mod;
class modController extends Controller
{
   public function index()
    {
        $mod = Mod::Paginate(5);
        return view('mods')->with(compact('mod'));
    }
    public function admin()
    {
    	$mods = Mod::Paginate(5);
        return view('admin.mods.index')->with(compact('mods'));
    }
}
