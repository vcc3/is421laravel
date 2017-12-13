<!--This index.blade.php is to view the current list of tasks created.
If no task is created then a link for the create page is displayed.----->
@extends("layout")
@section("content")
<!-------------This is for the task pages--------------------->
<div class ="container">
    <div class ="row">
        <div class ="col-md-6">

            <h1>Welcome to the Tasks Page.</h1>
            <p>Welcome User, below is where you can find your current list of tasks at hands.  If there are no tasks, you can create a task by clicking the link below.</p>



            <div class="dropdown">
                <p>Sort By
                    <a href ="/heroku/public/tasks/desc"> Recent</a>  |
                    <a href ="/heroku/public/tasks/asc"> Oldest</a>
                </p>
                <button><a href ="/heroku/public/tasks" >Reset Order</a></button>

            </div>
          
            @if($tasks->isEmpty())
                <a href="/heroku/public/tasks/create">Click Here</a>
            @else


                <table>
                    <tr>
                        <th>Task Id</th>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Task Created Date</th>
                        <th>Task Updated Date</th>
                    </tr>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td> <a href="/heroku/public/tasks/{{$task->id}}">
                                    {{$task->body}}
                                </a></td>
                            <td>@if($task->completed == 0)
                                    InComplete
                                @else
                                    Complete
                                @endif</td>
                            <td>{{$task->created_at}}</td>
                            <td>{{$task->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>


            @endif

        </div>
    </div>
</div>


@endsection