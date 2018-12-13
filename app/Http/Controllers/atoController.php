<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ato;
class atoController extends Controller
{
    //
    public function index()
    {
        $atos = ato::Paginate(5);
        return view('atos')->with(compact('atos'));
    }
    public function admin()
    {
    	$atos = ato::Paginate(5);
        return view('admin.atos.index')->with(compact('atos'));
    }
    //agregar
     public function store(Request $request)
    {
        $atos = new ato();
        $atos->name= $request->input('nombre');
        $atos->descripcion_larga= $request->input('descripcion_larga');
        $atos->descripcion_corta= $request->input('descripcion_corta');
        $atos->precio= $request->input('precio');
      	$atos->imagen= $request->input('imagen');
      	$atos->review= $request->input('review');
       	$atos->save();
    	return redirect ('/admin/atos');
            
            //FK
    }
    //detalles
      public function details($id)
    {
        $atos = ato::find($id);
        return view ('admin.atos.details')->with(compact('atos'));
    
        
    }

//para eliminar
     public function ver($id)
    {
        $atos = ato::find($id);
        return view ('admin.atos.ver')->with(compact('atos'));
    
        
    }
     public function destroy($id)
    {
        $atos = ato::find($id);
        $atos->delete();
        return redirect('admin/atos');
    

    }

    //para editar
     public function edit($id)
    {
        $atos = ato::find($id);
        return view ('admin.atos.edit')->with(compact('atos'));
    
        
    }
    //post edit
    public function update(Request $request,$id)
    {
        $atos = atos::find($id);
        $atos->name= $request->input('nombre');
        $atos->description= $request->input('descripcion_corta');
        $atos->long_description= $request->input('descripcion_larga');
        $atos->price= $request->input('precio');
      
       $atos->save();
        return redirect ('/admin/atos');
            
            //FK
    }
}
