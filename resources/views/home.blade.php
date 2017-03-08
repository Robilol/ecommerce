@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">The Wall</div>

                    <div class="panel-body">
                        {!! Form::open(['url' => 'write']) !!}
                        {!! Form::text('post_content') !!}
                        {!! Form::submit('Write on the wall !') !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
