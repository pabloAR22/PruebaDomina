<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['comment', 'user_id','task_id', 'post_id'];

    public function tasks(){
        return $this->belongsTo(Task::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
