@extends('layouts.app')

@section('content')

    <div class="container checkout">


        <div class="panel-body">
            {!! Form::open(['url' => 'addProduct']) !!}
            <p>Nom de l'article</p>{!! Form::text('name') !!}
            <p>Description de l'article</p>{!! Form::text('description') !!}
            <p>Prix de l'article</p>{!! Form::text('price') !!}<br><br>
            {!! Form::submit("Ajouter le produit") !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection