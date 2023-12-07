<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'expDate',
        'state',
        'user_id',
        'project_id'
        
    ];

    public function projects(){
        return $this->belongsTo(Project::class);
    }
}
