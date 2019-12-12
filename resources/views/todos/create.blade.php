@extends('layouts.app')


@section('content')
    <h1>Crear Todo</h1>
    {!! Form::open(['action' => 'TodoController@store', 'method' => 'POST']) !!}

    {!! Form::close() !!}

@endsection
