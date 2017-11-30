@extends('layout')
@section('content')
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="col-sm-5 col-md-6">

            <h1>Task Id: {{$task->id}}</h1>
            <p>Task Content: {{$task->body}}</p>
            <p>The current status of the task is : {{$task->completed}}</p>
            <p>{{$task->created_at}}</p>
            <p>{{$task->updated_at}}</p>

        </div>
    </div>
    <div class ="row">
        <div class="col-sm-5 col-md-6">
            <ul>
                @foreach($task->comments as $comment)
                    <li class="list-group-item">
                        {{$comment->body}}<br>
                        <strong>
                            Created: {{$comment->created_at->diffForHumans()}}
                        </strong>
                    </li>
                @endforeach
            </ul>

            <a href="/heroku/public/tasks/{{$task->id}}/edit">Edit</a>
        </div>
    </div>

@endsection