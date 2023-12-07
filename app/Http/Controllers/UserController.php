<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::latest()->paginate()
        ]);
    }

    public function create(User $user)
    {
        return view('users.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $user = $request->user()->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.index');
    }

    public function edit(User $user, Request $request)
    {
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, User $user){
        $request->validate([
            'name' => 'required',
            'email' => 'required','email', [Rule::unique('users')->ignore($user->id)],
            'password' => 'password'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('users.edit', $user);
    }

    public function destroy(User $user){
        $user->delete();
        return back();
    }
}
