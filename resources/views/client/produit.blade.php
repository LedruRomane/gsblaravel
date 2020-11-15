@extends('client.layouts.app')

@section('title', 'Produits')

@section('content')

    <div id="produits" class="presentation">
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

        <div class="blocProduits">
            <div class="nosProduits">
                <img class="nosProduits-images" src="./images/produit.png">
                <section>
                    <h6>DENTIFRICE SENSITIVE 50ML <br> ELMEX</h6>
                    <p>Contribue à réduire l'hypersensibilité dentaire <br> et favorise la prévention de la carie du collet.</p>
                    <p>Triple action efficace pour les dents sensibles <br> Protection - Dents fortes - Nettoie</p>
                    <p>50ml</p>
                    <p class="ref">Référence : 8718951281813</p>
                </section>
            </div>
            <div class="nosProduits">
                <img class="nosProduits-images" src="./images/produit.png">
                <section>
                    <h6>DENTIFRICE SENSITIVE 50ML <br> ELMEX</h6>
                    <p>Contribue à réduire l'hypersensibilité dentaire <br> et favorise la prévention de la carie du collet.</p>
                    <p>Triple action efficace pour les dents sensibles <br> Protection - Dents fortes - Nettoie</p>
                    <p>50ml</p>
                    <p class="ref">Référence : 8718951281813</p>
                </section>
            </div>
            <div class="nosProduits">
                <img class="nosProduits-images" src="./images/produit.png">
                <section>
                    <h6>DENTIFRICE SENSITIVE 50ML <br> ELMEX</h6>
                    <p>Contribue à réduire l'hypersensibilité dentaire <br> et favorise la prévention de la carie du collet.</p>
                    <p>Triple action efficace pour les dents sensibles <br> Protection - Dents fortes - Nettoie</p>
                    <p>50ml</p>
                    <p class="ref">Référence : 8718951281813</p>
                </section>
            </div>
        </div>
    </div>

@endsection
