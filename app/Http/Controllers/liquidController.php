<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Juice;
class liquidController extends Controller
{
    public function index()
    {
        $liquid = Juice::Paginate(5);
        return view('liquids')->with(compact('liquid'));
    }
   public function admin()
    {
    	$juice = Juice::Paginate(5);
        return view('admin.liquids.index')->with(compact('juice'));
    }
}
