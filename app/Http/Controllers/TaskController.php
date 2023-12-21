<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Project;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Task $task)
    {
        $users = User::all();
        $project = Project::all();

        return view('tasks.create', [
            'task' => $task,
            'users' => $users,
            'project' => $project
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'expDate' => 'required',
            'user' => 'required',
            'status' => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->expDate = $request->expDate;
        $task->user_id = $request->user;
        $task->project_id = $request->project;
        $task->state = $request->status;
        $task->save();

        return redirect()->route('tasks.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        // $comments = Comment::where('task_id', $task->id)->get();
        $comments = DB::table('comments')
                        ->select('comments.comment', 'comments.created_at', 'users.name')
                        ->join('users', 'users.id', '=', 'comments.user_id')
                        ->get();
         return view('tasks.show', [
            'task' => $task,
            'comments' => $comments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Task $task)
    {
        $users = User::all();
        $project = Project::all();
        return view('tasks.edit', [
            'task' => $task,
            'users' => $users,
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required|max:500',
            'expDate' => 'required',
            'user' => 'required',
            'status' => 'required'
        ]);

        $task->update([
            'title' => $request->title,
            'description' => $request->description,
            'expDate' =>  $request->expDate,
            'user' => $request->user,
            'state' => $request->status,
        ]);

        return(redirect()->route('tasks.edit', $task));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }
}
