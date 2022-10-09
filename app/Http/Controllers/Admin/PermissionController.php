<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(){
        $i = 1;
        $permissions = Permission::all();
        return view('admin.permissions.index', compact(['permissions', 'i']));
    }

    public function create(){
        return view('admin.permissions.create');
    }

    public function store(Request $request){
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Permission::create($validated);

        return to_route('admin.permissions.index');
    }

    public function show(Permission $permission)
    {
        return view('admin.permissions.show', compact('permission'));
    }

    public function edit(Permission $permission){
        return view('admin.permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission){
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        $permission->update($validated);

        return to_route('admin.permissions.index');
    }

    public function destroy(Permission $permission){
        $permission->delete();
        return to_route('admin.permissions.index');
    }
}
