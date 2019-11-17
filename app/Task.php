<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable =['content','usre_id'];
    
    public function user()
    {
        //Task（単）を所有するUserを取得する。
        return $this->bekongsTo(User::class);
    }
}
