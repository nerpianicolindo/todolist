@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Volver</a>
    <h1>Editar Todo</h1>
    {!! Form::model($todo, ['action'=>['TodoController@update', $todo->id], 'method' =>'PUT']) !!}
    {{Form::bsText('text')}}
    {{Form::bsTextArea('body')}}
    {{Form::bsText('due')}}
    {{Form::bsSubmit('Actualizar', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
