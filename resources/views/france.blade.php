@extends('layouts.app')

@section('title', 'GSB en France')

@section('content')
<div id="france">
    <div class="content">

        <header class="banniere">
            <h3 class="titre">GSB en France</h3>
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

        <div class="info">
            <img class="image" src="./images/ChiffresClés.png" width="1300">
            <div class="repartition">
                <p>La répartition des Secteurs est découpée en 6 secteurs géographiques : nord, sud, est, ouest, Paris centre et DTOM (Caraïbes-Amériques et Asie-Afrique).<br><br> Les secteurs sont découpés en zones géographiques puis en secteurs régionaux. Dans chaque secteur il y existe une hiérarchie avec un responsable d’un secteur (ex : Nord) avec des délégués assignés par région (ex : Normandie). <br><br> Les visiteurs médicaux sont encadrés par des délégués (leur supérieur direct) qui lui-même est encadré par le Responsable de secteur.</p>
                <img src="./images/carte.jpg">
            </div>
            <img class="image" id="hierarchieImage" src="./images/HierarchieSecteur.png" width="1300">
        </div>
    </div>
</div>
@endsection
