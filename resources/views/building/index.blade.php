@extends('layouts.app')


@section('app')
    <h1 class="text-center mt-4">Building</h1>

    <a class="btn btn-primary my-2" href="{{route('building.create')}}" role="button">Crear edificio</a>


    <table class="table">
        <thead class="bg-info">
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Direccion</th>
            <th scope="col">Botones</th>

          </tr>
        </thead>
        <tbody>
          @foreach ($buildings as $building)
          <tr>
            <th scope="row">{{$building->id}}</th>
            <td>{{$building->nombre}}</td>
            <td>{{$building->ciudad}}</td>
            <td>{{$building->direccion}}</td>
            <td><a class="btn btn-primary my-2" href="{{route('building.show', $building)}}" role="button">Detalles</a></td>
          </tr>
          @endforeach
@endsection
