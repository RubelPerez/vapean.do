{{$atos->nombre}}
{{$atos->descripcion_corta}}
{{$atos->precio}}
{{$atos->review}}
  <form action="{{url('/admin/atos/'.$atos->id)}}" method="post">
    {{ csrf_field() }}
   {{ method_field('DELETE') }}

  <p class="lead">

    <button type="submit" class="btn btn-warning btn-lg" role="button">Eliminar</button>
    <a class="btn btn-primary btn-lg" href="{{url('/admin/atos')}}" role="button">Volver</a>

  </p>
</form>
</div>

</div>
   </div>        
      </div> </div>