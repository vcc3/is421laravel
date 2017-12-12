<?php

namespace App\Http\Controllers;
use App\Task;
use App\User;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userID = auth()->id();
        $user = User::find($userID);
        if($user != null) {
            $tasks = $user->getTasks();
            return view( 'tasks.index', compact('tasks'));
        }
        else{
            return view('tasks.test', compact('tasks'));
        }

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( 'tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store()
    {
    $this->validate(request(), [

        'body' => 'required',
        'completed' => 'required'

    ]);
        //from keith
        $task = new Task;
        $task->user_id = auth()->id();
        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/tasks');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Task $task make sure that laravel accept a task object that get inputted into function
    public function show(Task $task)
    {
        dd: $task;
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('tasks.edit',compact('task'));
    }
    public function test()
    {
        return view('tasks.test');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Task $task)
    {

        // from keith
        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        // form keith
        $task->delete();

        // redirect
        return redirect('/tasks');
    }
    // new stuff
    public function comment(Task $task) {
        $userID = auth()->id();

        $task->addComment(request('body'), $userID);

        return back();
    }
}
