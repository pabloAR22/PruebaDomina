<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request, int $id)
    {
        $user = Auth::user()->id;
        $idTask = $id;

        Comment::create([   
            'user_id' => $user,
            'task_id' => $idTask,
            'comment' => $request->comment,
        ]);

        return back();
    }
}
