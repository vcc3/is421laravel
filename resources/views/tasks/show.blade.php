<!-------------This is for task body or actual text page--------------------->
@extends('layout')
@section('content')
    <h1>
        List Number {{$task->id}}
    </h1>

    <p>{{$task->body}}</p>

@endsection