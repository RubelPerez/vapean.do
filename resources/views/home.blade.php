@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4 mb-4">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card text-white bg-light mb-3 d-inline-block" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
  <a href="{{url('admin/kits/')}}">  <h4 class="card-title">Panel de administracion  KIT</h4></a>
    <p class="card-text text-info">Agregar, modificar, eliminar algun KIT</p>
  </div>
</div>
                <div class="card text-white bg-light mb-3 d-inline-block" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
  <a href="{{url('admin/mods/')}}">  <h4 class="card-title">Panel de administracion  MODS</h4></a>
    <p class="card-text text-info">Agregar, modificar, eliminar MOD</p>
  </div>
</div>
                <div class="card text-white bg-light mb-3 d-inline-block" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
  <a href="{{url('admin/atos/')}}">  <h4 class="card-title">Panel de administracion  Atomizadores</h4></a>
    <p class="card-text text-info">Agregar, modificar, eliminar  Atomizador</p>
  </div>
</div>
                <div class="card text-white bg-light mb-3 d-inline-block" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
   <a href="{{url('admin/liquids/')}}"> <h4 class="card-title">Panel de administracion  E-Juice</h4></a>
    <p class="card-text text-info">Agregar, modificar, eliminar algun E-Juice</p>
  </div>
</div>
                <div class="card text-white bg-light mb-3 d-inline-block" style="max-width: 20rem;">
  <div class="card-header"></div>
  <div class="card-body">
  <a href="{{url('admin/accesories/')}}">  <h4 class="card-title">Panel de administracion  Baterias Y Accesorios</h4></a>
    <p class="card-text text-info">Agregar, modificar, eliminar alguna bateria o Accesorio</p>
  </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
