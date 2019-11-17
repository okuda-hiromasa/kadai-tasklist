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
    
    public function tasks()
    {
        //hasManyでUserモデル（１）がTaskモデル(多)を所有する。
        //(「１対多」リレーションは一つのモデルが他の多くのモデルを所有する関係を定義)
        return $this ->hasMany(Task::class);
    }
}
