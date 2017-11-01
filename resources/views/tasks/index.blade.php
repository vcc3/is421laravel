@extends("layout")
@section("content")
<!-------------This is for the task pages--------------------->
@foreach($tasks as $task)
    <li>
        <a href="/heroku/public/tasks/{{$task->id}}">
            {{$task->body}}
            {{$task->completed}}
        </a>



    </li>
@endforeach




@endsection