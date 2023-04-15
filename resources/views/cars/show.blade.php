@extends('layouts.app')

@section('page_title', 'Dettagli auto')


@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{ $car->image }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title text-center">{{ $car->brand }} {{ $car->model }}</h5>
            <h6 class="card-title"><strong>Chilometri: </strong>{{ $car->kilometres }}</h6>
            <h6 class="card-title"><strong>Colore: </strong>{{ $car->color }}</h6>
            <h6 class="card-title"><strong>Targa: </strong>{{ $car->car_license_plate }}</h6>
            <h6 class="card-title"><strong>Prezzo: </strong> € {{ $car->price }}</h6>
            <h6 class="card-title"><strong>Costo: </strong> € {{ $car->cost }}</h6>
            <h6 class="card-title"><strong>Alimentazione: </strong>{{ $car->engine_supply }}</h6>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
@endsection
