@extends('layouts.app')
<div class="container">
 <table class="table mt-5 mb-5">
    <h1>baterias y acesorios</h1>
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
      @foreach($accesory  as $acc)
        <tr>
         
            <td class="text-center">{{$acc->id}}</td>
            <td>{{$acc->nombre}}</td>
            <td>{{$acc->descripcion_corta}}</td>
            <td>{{$acc->review ?  $acc->review : 'No Tiene' }}</td>
            <td class="text-right">{{$acc->precio}}</td>
            <td class="td-actions text-right">
                  
                <a href="{{url('/admin/accesories/'.$acc->id.'/details')}}" role="button" rel="tooltip" title="Ver producto" class="btn btn-info btn-simple btn-xs">Ver Producto
                    <i class="fa fa-info"></i>
                </a>
                <a href="{{url('/admin/accesories/'.$acc->id.'/edit')}}" role="button" rel="tooltip" title="Editar producto" class="btn btn-success btn-simple btn-xs">Editar producto
                    <i class="fa fa-edit"></i>
                </a>
           
                
                <a href="{{url('/admin/accesories/'.$acc->id.'/ver')}}  "role="button"  title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                    <i class="fa fa-times"></i>Eliminar Producto
                </a>
            
            </td>
           
        </tr>
         @endforeach

    </tbody>
</section>
</table>
         {{$accesory->links()}} 
     </div>
