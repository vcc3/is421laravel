<!--This create.blade.php is for the create a task form.----->

@extends('layout')
@section('content')
    <br>
    <br>
    <br>
    <div class="container">
        <div class ="row">

        </div>
        <div class ="row">
            <div class ="col-md-6">
                <hr>
                <h1>Create a Task </h1>
                <p>Please fill out the  field below and choose if task is completed or not.</p>
                <form action="/heroku/public/tasks" method="post">

                    <div class="form-group">
                        {{ csrf_field() }}
                        <label for="taskTitle">Task Title</label>
                        <input type="text" class="form-control" id="taskTitle" name="body">
                    </div>
                    <div class="form-group">
                        <label for="taskStatus">Task Status</label>
                        <select class="form-control" id="taskStatus" name="completed" selected="0">
                            <option value="0">Incomplete</option>
                            <option value="1">Complete</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Create Task</button>
                </form>
                <hr>
            </div>

        </div>
    </div>

    @include('Layout.error')


@endsection