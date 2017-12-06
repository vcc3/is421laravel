<!--This show.blade.php is the clicked task item and this shows the details of the task
including any comments added from the edit page. ----->
@extends('layout')
@section('content')
    <br>
    <br>
    <br>
    <br>

    <div class="container">
        <div class="row">
            <hr>
            <!---column  will contain info for task-->
            <div class="col-sm-6">

                <h1> Task Information:</h1>
                <p> To edit any information, <a href="/heroku/public/tasks/{{$task->id}}/edit">click here</a></p>

                    <p>Task ID:{{$task->id}}</p>
                    <p>Task Name:{{$task->body}}</p>
                    <p>Task Status: {{$task->completed}}</p>
                    <p>Task Created on: {{$task->created_at}}</p>
                    <p>Task last updated on: {{$task->updated_at}}</p>

            </div>
            <!---column  will contain the comments associated with task.->
            <div class="col-sm-6">
                <!---   --->
               <h1>Comments list:</h1>
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



            </div>

        </div>
    </div>





@endsection