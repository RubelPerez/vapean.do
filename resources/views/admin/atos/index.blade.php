@extends('layouts.app')
<div class="container">
 <table class="table mt-5 mb-5">
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
      @foreach($atos  as $atomizador)
        <tr>
         
            <td class="text-center">{{$atomizador->id}}</td>
            <td>{{$atomizador->nombre}}</td>
            <td>{{$atomizador->descripcion_corta}}</td>
            <td>{{$atomizador->review ?  $atomizador->review : 'No Tiene' }}</td>
            <td class="text-right">{{$atomizador->precio}}</td>
            <td class="td-actions text-right">
                  
                <a href="{{url('/admin/atos/'.$atomizador->id.'/details')}}" role="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">Ver Producto
                    <i class="fa fa-info"></i>
                </a>
                <a href="{{url('/admin/atos/'.$atomizador->id.'/edit')}}" role="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">Editar producto
                    <i class="fa fa-edit"></i>
                </a>
           
                
                <a href="{{url('/admin/atos/'.$atomizador->id.'/ver')}}  "role="button"  title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>Eliminar Producto
                </a>
            
            </td>
           
        </tr>
         @endforeach

    </tbody>
</section>
</table>
         {{$atos->links()}} 
     </div>
