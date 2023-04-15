@extends('layouts.app')

@section('cdn')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
@endsection

@section('page_title', 'Lista auto disponibili')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Marca</th>
                <th scope="col">Modello</th>
                <th scope="col">Chilometri</th>
                <th scope="col">Colore</th>
                <th scope="col">Prezzo</th>
                <td scope="col">Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                <tr>
                    <th scope="row">{{ $car->id }}</th>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->model }}</td>
                    <td>{{ $car->kilometres }}</td>
                    <td>{{ $car->color }}</td>
                    <td>€ {{ $car->price }}</td>
                    <td>
                        <a href="{{ route('cars.show', $car) }}"><i class="bi bi-arrow-up-right-square"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $cars->links('pagination::bootstrap-5') }}
@endsection
