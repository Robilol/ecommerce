@extends('layouts.app')

@section('content')

    <div class="container checkout">

        <p>Votre commande a été enregistré !</p>
        <div class="panel-body">
            {!! Form::open(['url' => 'send']) !!}
            {!! Form::submit("Valider la commande") !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection