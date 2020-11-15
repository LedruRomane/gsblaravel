@extends('client.layouts.app')

@section('title', 'Connection')

@section('content')
    <form method="POST" action="{{ route('login') }}">
    @csrf
        <p class="text-left"><em>login</em></p>
        <div class="row test">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" >
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="password" name="password" placeholder="Mot de passe" type="password" >
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <button class="btn send" style="background: #00AA66; color: white" type="submit"><strong>Se connecter</strong></button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
