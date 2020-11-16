@extends('client.layouts.app')

@section('title', 'Famille de médicaments')

@section('content')
    @isset($familles)
        @foreach($familles as $famille)
            <a href="{{ route('familles.medicaments', ['famille' => $famille->id]) }}">
                <p>{{ $famille->reference }} : {{ $famille->libelle }}</p>
            </a>

        @endforeach
    @endisset
@endsection
