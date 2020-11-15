@extends('client.layouts.app')

@section('title', 'Contact')

@section('content')

    <div class="presentation">
        <header class="banniere">
            <h3 class="titre">Nous Contacter</h3>
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

        <div class="container">
            <form method="post" action="{{ route('contact.submit') }}">
                @csrf
                <p class="text-left"><em>Notre formulaire de contact</em></p>
                <div class="row test">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="name" name="name" placeholder="Nom" type="text" >
                            </div>
                            <div class="col-sm-6 form-group">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" >
                            </div>
                        </div>
                        <div>
                            <input class="form-control" id="sujet" name="sujet" placeholder="Sujet" type="sujet" >
                        </div>
                        <textarea class="form-control" id="comments" name="comments" placeholder="Votre Message" rows="5"></textarea>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <button class="btn send" style="background: #00AA66; color: white" type="submit"><strong>Envoyer</strong></button>
                            </div>
                        </div>
                    </div>
                </div>

                @error('name') <div class="alert alert-danger">{{ $message }}</div> @enderror
                @error('email') <div class="alert alert-danger">{{ $message }}</div> @enderror
                @error('sujet') <div class="alert alert-danger">{{ $message }}</div> @enderror
                @error('comments') <div class="alert alert-danger">{{ $message }}</div> @enderror

                @if(Session::has('success')) <div class="alert alert-success">{{ Session::get('success') }}</div> @endisset
            </form>
        </div>
    </div>

@endsection
