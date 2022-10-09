<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email']
        ]);
        User::create($validated);
        return to_route('admin.users.index');
    }

    public function edit(User $user){
        $roles = Role::all();
        return view('admin.users.edit', compact(['user','roles']));
    }

    public function update(Request $request, User $user){
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $user->update($validated);
        return to_route('admin.users.index');
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('admin.users.index');
    }
}
