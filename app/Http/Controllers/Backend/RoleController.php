<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use HasinHayder\Tyro\Models\Role;
use HasinHayder\Tyro\Models\Privilege;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::withCount('users')->get();
        return view('backend.pages.roles.index', compact('roles'));
    }

    public function create()
    {
        $privileges = Privilege::all();
        return view('backend.pages.roles.create', compact('privileges'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name',
            'privileges' => 'nullable|array',
            'privileges.*' => 'exists:privileges,id',
        ]);

        $role = Role::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        if ($request->has('privileges')) {
            $role->privileges()->sync($request->privileges);
        }

        return redirect()->route('roles.index')->with('success', 'Role created successfully.');
    }

    public function edit(Role $role)
    {
        $privileges = Privilege::all();
        $role->load('privileges');
        return view('backend.pages.roles.edit', compact('role', 'privileges'));
    }

    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:roles,name,' . $role->id,
            'privileges' => 'nullable|array',
            'privileges.*' => 'exists:privileges,id',
        ]);

        $role->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        if ($request->has('privileges')) {
            $role->privileges()->sync($request->privileges);
        } else {
            $role->privileges()->detach();
        }

        return redirect()->route('roles.index')->with('success', 'Role updated successfully.');
    }

    public function destroy(Role $role)
    {
        // Prevent deleting protected roles if needed
        if (in_array($role->slug, ['super-admin', 'admin', 'user'])) {
            return redirect()->back()->with('error', 'Protected roles cannot be deleted.');
        }

        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully.');
    }
}
