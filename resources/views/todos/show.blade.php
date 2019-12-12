@extends('layouts.app')

@section('content')

    <a href="/" class="btn btn-primary">Volver</a>
    <h1><a href="/todo/{{ $todo->id }}">{{$todo->text}}</a></h1>
    <div class="label">
        {{$todo->due}}
    </div>
    <hr>

    <p>{{$todo->body}}</p>
    <br>
    <br>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-success">Editar</a>
    {!! Form::open(['action'=>['TodoController@destroy', $todo->id], 'method'=>'DELETE', 'class'=>'pull-right']) !!}
    {{Form::bsSubmit('Borrar', ['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection
