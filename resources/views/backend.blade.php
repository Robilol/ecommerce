@extends('layouts.app')

@section('content')

    <div class="container checkout">


        <div class="panel-body">
            {!! Form::open(['url' => 'addProduct']) !!}
            <p>Nom du produit</p>{!! Form::text('name') !!}
            <p>Description du produit</p>{!! Form::text('description') !!}
            <p>Prix du produit</p>{!! Form::text('price') !!}<br><br>
            {!! Form::file('image') !!}
            {!! Form::submit("Ajouter le produit") !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection