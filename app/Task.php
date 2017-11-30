<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $guarded = array();
    public function scopeIncomplete($query)
    {

        //return $query->where('completed', 0);
    }
    // use userid to return tasks from user


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
