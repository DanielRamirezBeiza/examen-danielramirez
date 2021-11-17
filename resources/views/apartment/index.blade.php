@extends('layouts.app')


@section('app')
    <h1 class="text-center mt-4">Apartament</h1>


    <a class="btn btn-primary my-2" href="{{ route('apartment.create') }}" role="button">Crear departementos</a>

    <table class="table">
        <thead class="bg-info">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Número</th>
                <th scope="col">Edificio</th>
                <th scope="col">Detalles</th>
            </tr>
        </thead>
        @foreach ($dptos as $dpto)
        <tr>
            <th scope="row">{{ $dpto->id }}</th>
            <td>{{ $dpto->numero }}</td>
            <td>{{ $dpto->building->nombre }}</td>
            <td><a class="btn btn-primary my-2" href="{{route('apartment.show', $dpto)}}" role="button">Detalles</a></td>
        
        </tr>
             @endforeach

    @endsection
