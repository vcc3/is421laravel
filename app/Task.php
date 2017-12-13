<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $guarded = array();


    public function scopeIncomplete(Task $tasks)
    {
        //  $userID = auth()->id();
        // return $tasks = Task::where('user_id',$userID)->get();
        //return $query->where('completed', 0);
    }
    public function orderDate(Task $tasks){

        $tasks = $this->task()->getQuery()->orderBy('created_at', 'desc')->get();
        return $tasks;
    }



    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function addComment($body, $user_id) {

        $this->comments()->Create(compact('body','user_id'));
    }
    public function user()
    {
        return $this->hasMany( User::class);
    }
}
