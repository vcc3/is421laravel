<!--------Edit page that takes the task and allow suser to go in and update or delete  the task------------>
@extends('layout')
@section('content')
<br>
<br>
<br>
<br>
<div class ="container">
    <div class ="row">
        <!-----Edit form/Delete button----->
        <div class ="col-md-7">
            <h1>Edit Task Name and status here.</h1>
            <form action="/heroku/public/tasks/{{$task->id}}/edit" method="post">

                <div class="form-group">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <label for="taskTitle">Task Title</label>
                    <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
                </div>
                <div class="form-group">
                    <label for="taskStatus">Task Status</label>
                    @if($task->completed ==0)
                        <select class="form-control" id="taskStatus" name="completed">
                            <option value="0" selected>InComplete</option>
                            <option value="1">Complete</option>
                        </select>
                    @else
                        <select class="form-control" id="taskStatus" name="completed">
                            <option value="0">InComplete</option>
                            <option value="1" selected>Complete</option>
                        </select>
                    @endif
                </div>


                <button type="submit" class="btn btn-primary">Save</button>

            </form>
            <p>
            <form action="/heroku/public/tasks/{{$task->id}}/delete" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn-danger">Delete</button>

            </form>

        </div>
        <!-----Comments adding----->
        <div class ="col-md-5">
            <h1> Add comments here.</h1>
            <form action="/heroku/public/tasks/{{$task->id}}/comments" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" placeholder="Your comment" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>
            <p>Current task comments:</p>
            <ul class="list-group">
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