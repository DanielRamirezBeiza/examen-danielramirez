@extends('layouts.app')


@section('app')

    
    <h1 class="text-center">Detalles Edificio {{ $building->nombre }}</h1>
    <a class="btn btn-danger my-2" href="{{route('building.index')}}" role="button">volver</a>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Número</th>
                <th scope="col">Detalles</th>

                

            </tr>
        </thead>
        <tbody>
            
                @foreach ($building->apartement as $dpto)
                    <tr>
                        <th scope="row">{{ $dpto->id }}</th>
                        <td>{{ $dpto->numero }}</td>
                        <td><a class="btn btn-primary my-2" href="{{route('apartment.show', $dpto)}}" role="button">Detalles</a></td>

                    </tr>
                @endforeach
         

        @endsection
