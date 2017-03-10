@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-4 product">
            <img src="{{ asset('images/'.$product->image) }}" alt="{{$product->name}}">
        </div>
        <div class="col-md-3 product">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product-> description }}</p>
            <h3>{{ $product-> price }}€</h3>
        </div>
        <div class="col-md-4 product">
            <h3>Taille :</h3>
            {!! Form::open(['url' => 'add']) !!}
            {{ Form::select('size', $size) }}
            {!! Form::submit('Ajouter', ['class' => 'btn btn-info btn-md" glyphicon glyphicon-shopping-cart'] ) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection