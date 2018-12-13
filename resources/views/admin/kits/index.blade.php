@extends('layouts.app')
<div class="container">
 <table class="table mt-5 mb-5">
    <thead>
        <h1>kit</h1>
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
      @foreach($kits  as $k)
        <tr>
         
            <td class="text-center">{{$k->id}}</td>
            <td>{{$k->nombre}}</td>
            <td>{{$k->descripcion_corta}}</td>
            <td>{{$k->review ?  $k->review : 'No Tiene' }}</td>
            <td class="text-right">{{$k->precio}}</td>
            <td class="td-actions text-right">
                  
                <a href="{{url('/admin/kits/'.$k->id.'/details')}}" role="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">Ver Producto
                    <i class="fa fa-info"></i>
                </a>
                <a href="{{url('/admin/kits/'.$k->id.'/edit')}}" role="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">Editar producto
                    <i class="fa fa-edit"></i>
                </a>
           
                
                <a href="{{url('/admin/kits/'.$k->id.'/ver')}}  "role="button"  title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>Eliminar Producto
                </a>
            
            </td>
           
        </tr>
         @endforeach

    </tbody>
</section>
</table>
         {{$kits->links()}} 
     </div>
