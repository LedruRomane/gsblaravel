@extends('client.layouts.app')

@section('title', 'Famille de médicaments')

@section('content')
    @isset($familles)
        <div class="familleCard">
            @foreach($familles as $famille)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src= "{{ url("images/familles/" . $famille->getKey(). ".jpg")}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $famille->libelle }}</h5>
                        <p class="card-text">Référence de famille : {{ $famille->reference }}</p>
                        <a href="{{ route('familles.medicaments', ['famille' => $famille->id]) }}" class="btn btn-primary">Voir</a>
                    </div>
                </div>
            @endforeach
        </div>
    @endisset
@endsection
