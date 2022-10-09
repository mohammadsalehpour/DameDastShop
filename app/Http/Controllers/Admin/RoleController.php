<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $i = 1;
        $roles = Role::whereNotIn('name', ['admin'])->get();
        return view('admin.roles.index', compact(['roles', 'i']));
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.roles.create', compact(['permissions']));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['name' => ['required', 'min:3']]);
        Role::create($validated);

        return to_route('admin.roles.index')->with('success', 'Role Added Successfully.');
    }

    public function show(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.roles.show', compact(['role', 'permissions']));
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $rolePermissions = Permission::all();
        return view('admin.roles.edit', compact(['role', 'permissions','rolePermissions']));
    }

    public function update(Request $request, Role $role)
    {
        // var_dump($request);

        $validated = $request->validate([
            'name' => ['required', 'min:3'],
            'permissions' => 'required'
        ]);

        $role->update($validated);

        $role->syncPermissions($request->input('permissions'));


        return to_route('admin.roles.index')->with('success', 'Role Updated Successfully.');
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('success', 'Role Deleted Successfully.');;
    }
}
