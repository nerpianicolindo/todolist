@extends('layouts.app')


@section('content')
    <h1>Crear Todo</h1>
    {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}
        {{Form::bsText('text')}}
        {{Form::bsTextArea('body')}}
        {{Form::bsText('due')}}
        {{Form::bsSubmit('Enviar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
