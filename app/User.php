<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function task()
    {
        return $this->hasMany( Task::class);
    }
    public function getTasks(){

    $tasks = Task::where('user_id',$this->id)->get();
    return $tasks;

}
    public function getAscTasks(){
        $userID= $this->id;
        $tasks = Task::orderBy('created_at', 'asc')->where('user_id',$userID)->get();
        return $tasks;
    }

    public function getDescTasks(){
        $userID= $this->id;
        $tasks = Task::orderBy('created_at', 'desc')->where('user_id',$userID)->get();
        return $tasks;
    }
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
