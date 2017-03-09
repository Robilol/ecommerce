@extends('layouts.app')

@section('content')

    <div class="container checkout">

        <h1>Résumé de votre commande :</h1>
        <div class="row">
            <div class="col-md-10 col-sm-12">
                <div class="row">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="row">
                                <div class="col-md-3">Image</div>
                                <div class="col-md-2">Nom</div>
                                <div class="col-md-2">Prix unitaire</div>
                                <div class="col-md-2">Quantité</div>
                                <div class="col-md-2">Total</div>
                            </div>
                            @foreach($cart as $product)
                                <div class="row">
                                    <div class="col-md-3"><img src="{{ asset('images/'.$product->options->image) }}"
                                                               class="img-responsive"></div>
                                    <div class="col-md-2">{{ $product->name }}</div>
                                    <div class="col-md-2">{{ $product->price }}€</div>
                                    <div class="col-md-2">
                                        {{ $product->qty }}
                                    </div>
                                    <div class="col-md-2">{{ $product->price * $product->qty }}€</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span style="float: right;">
                <h2>Total : {{ $total }}€</h2>
        </span>
        <br><br><br><br>
        <h1>Adresse de livraison :</h1>
        <h3>{{ $address->name }}</h3>
        <p>{{ $address->adress }}<br>
            {{ $address->city }} {{ $address->zip_code }}<br>
            {{ $address->country }}</p>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-2">
                    {!! Form::open(['url' => 'send']) !!}
                    {!! Form::submit('Valider la commande', ['class' => 'btn btn-success'] ) !!}
                    {!! Form::close() !!}
                </div>
                <div class="col-md-2">
                    <a href="{{ url('/cart') }}">
                        <button class="btn btn-danger">Annuler</button>
                    </a>
                </div>
            </div>

        </div>
    </div>

@endsection