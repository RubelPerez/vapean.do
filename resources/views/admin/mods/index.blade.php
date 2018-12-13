@extends('layouts.app')
<div class="container">
 <table class="table mt-5 mb-5">
    <h1>mods</h1>
    <thead>
        <tr>
            <th class="text-center ">ID</th>
            <th class="text-center ">Nombre</th>
            <th class="text-center ">Descripcion</th>
            <th class="text-center ">Categoria</th>
            <th class="text-center  ">Precio</th>
            <th class="text-center col-md-2">Acciones</th>
        </tr>
    </thead>
    <section id="body">
    <tbody>
      @foreach($mods  as $m)
        <tr>
         
            <td class="text-center">{{$m->id}}</td>
            <td>{{$m->nombre}}</td>
            <td>{{$m->descripcion_corta}}</td>
            <td>{{$m->review ?  $m->review : 'No Tiene' }}</td>
            <td class="text-right">{{$m->precio}}</td>
            <td class="td-actions text-right">
                  
                <a href="{{url('/admin/mods/'.$m->id.'/details')}}" role="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">Ver Producto
                    <i class="fa fa-info"></i>
                </a>
                <a href="{{url('/admin/mods/'.$m->id.'/edit')}}" role="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">Editar producto
                    <i class="fa fa-edit"></i>
                </a>
           
                
                <a href="{{url('/admin/mods/'.$m->id.'/ver')}}  "role="button"  title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>Eliminar Producto
                </a>
            
            </td>
           
        </tr>
         @endforeach

    </tbody>
</section>
</table>
         {{$mods->links()}} 
     </div>
