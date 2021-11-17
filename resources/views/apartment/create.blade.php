@extends('layouts.app')


@section('app')



<h1 class="text-center">Formulario para crear departamentos</h1>



<form class="mt-4" method="POST" action="{{route('apartment.store')}}">
    @csrf

    <div class="form-group">
        <label for="edificio">Edificio</label>

        <select name="building_id" class="form-control" id="edificio">
            <option value="">--Seleccione--</option>
            
            @foreach($edificios as $id =>$edificio)
            <option value="{{$edificio->id}}"> {{$edificio->id}} </option>
            @endforeach
            
        </select>
        
    </div>

    <div class="form-group">
      <label for="numero">Número</label>
      <input type="number" class="form-control" name="numero" id="numero" placeholder="Ingrese el numero">
    </div>
    
   
    <button type="submit" class="btn btn-primary">Ingresar</button>
    <a class="btn btn-danger my-2" href="{{route('apartment.index')}}" role="button">volver</a>

  </form>




@endsection