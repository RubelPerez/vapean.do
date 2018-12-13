  <form class="form" method="post" action="{{url('/admin/atos/'.$atos->id.'/edit')}}">
{{csrf_field()}}  

         
    <input type="text" class="form-control" id="formGroupExampleInput1" name="name"placeholder="Nombre del producto" value="{{ $atos->nombre}}" required>      
    <input type="text" class="form-control"  placeholder="descripcion Corta" name="description" value="{{ old('description',$atos->descripcion_corta)}}"required>  

     <input type="number" min="0" step=".01" class="form-control" id="formGroupExampleInput3" name="price" placeholder="Precio" value="{{ $atos->precio}}" required>
    <textarea class="form-control" name="long_description" type="text" placeholder="descripcion larga"  required >
     {{ $atos->descripcion_larga}}
      
    </textarea>

            <button class="btn btn-primary"type="submit">Modificar</button>
  <a href="{{url('admin/atos/')}}" class="btn btn-default">Atras</a>
          </form>