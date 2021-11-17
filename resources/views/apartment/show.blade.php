@extends('layouts.app')


@section('app')



<h1 class="text-center">Detalles departamento {{ $apartment->numero }}</h1>
<a class="btn btn-danger my-2" href="{{route('apartment.index')}}" role="button">volver</a>



    
    <div class="card text-center">
        <div class="card-header">
            Departamento del edificio {{$apartment->building->nombre}}
        </div>
        <div class="card-body">
            <h2>{{$apartment->numero}}</h2>
            <h5>{{$apartment->building->Dirección}}</h5>
            {{$apartment->building->ciudad}}
        </div>
    </div>
@endsection