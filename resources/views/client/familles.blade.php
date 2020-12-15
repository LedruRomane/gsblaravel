@extends('client.layouts.app')

@section('title', 'Famille de médicaments')

@section('content')
    <div class="presentation">
        <header class="banniere">
            <h3 class="titre">Nos produits</h3>
            <svg class="white_separator_bottom" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                 x="0px" y="0px" width="100%" viewBox="0 0 1800 117"
                 style="overflow:scroll;enable-background:new 0 0 1800 117;" xml:space="preserve">
            <style type="text/css">
                .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#ffffff;}
            </style>
                <defs>
                </defs>
                <path class="st0" d="M0,0v117c0,0,478.1-96,942.1-101S1800,77,1800,77V0H0z"/>
            </svg>
        </header>
    </div>
    @isset($familles)
        <div class="familleCard">
            @foreach($familles as $famille)
                <div class="card" style="width: 18rem; box-shadow: 2px 2px 20px grey;">
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
