@extends('layout.app')


@section('content')

    <a class="btn btn-default" href="/">Go Back</a>

    <h1>{{$todo->text}}</h1>

    <div class="label label-danger">{{$todo->due}}</div>

    <p class="well">{{$todo->body}}</p>
    <br><br>

    <a href="/todos/{{$todo->id}}/edit" class="btn btn-default">Edit</a>


    {!! Form::open(['action' => ['TodosController@destroy',$todo->id],'method' => 'POST']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{ Form::bsSubmit('Delete',['class'=>'btn btn-danger']) }}

    {!! Form::close() !!}

    @endsection
