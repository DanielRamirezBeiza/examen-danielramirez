@extends('layouts.app')


@section('app')



<h1 class="text-center">Formulario para crear edificios</h1>



<form class="mt-4" method="POST" action="{{route('building.store')}}">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese un nombre">
    </div>
    <div class="form-group">
      <label for="direccion">Dirección</label>
      <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Indique la dirección">
    </div>

    <div class="form-group">
        <label for="Ciudad">Ciudad</label>
        <input type="text" class="form-control" name="ciudad" id="ciudad" placeholder="Indique la ciudad">
      </div>
   
    <button type="submit" class="btn btn-primary">Ingresar</button>
    <a class="btn btn-danger my-2" href="{{route('building.index')}}" role="button">volver</a>

  </form>




@endsection