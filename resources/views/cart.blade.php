@extends('layouts.app')

@section('content')
    <div class="container cart">
        @if(count($cart) != 0)
            <div class="row">
                <div class="col-md-10 col-sm-12">
                    <h1>Mon panier</h1>

                    <!-- nesting -->

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
                                        <div class="col-md-2"><a href="/minus/{{$product->rowId }}" role="button"
                                                                 class="btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                                            </a>
                                            {{ $product->qty }}
                                            <a href="/plus/{{$product->rowId }}" role="button"
                                               class="btn btn-default btn-xs">
                                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                            </a></div>
                                        <div class="col-md-2">{{ $product->price * $product->qty }}€</div>
                                        <div class="col-md-1">
                                            <a href="/remove/{{$product->rowId }}" role="button"
                                               class="btn btn-default btn-md">
                                                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                            </a>
                                        </div>
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
            <a href="{{ url('/checkout') }}">
                <button class="btn btn-default col-md-12 col-sm-6 col-xs-12">Commander</button>
            </a>
        @else
            <h1>Votre panier est vide :'(</h1>
        @endif
    </div>
@endsection
