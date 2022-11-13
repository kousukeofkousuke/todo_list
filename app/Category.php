<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function tasks()   
    {
        return $this->hasMany('App\Task');
    }

    public function getByCategory(int $limit_count = 5)
    {
        return $this->tasks()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
