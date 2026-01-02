<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use HasinHayder\Tyro\Models\Privilege;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PrivilegeController extends Controller
{
    public function index()
    {
        $privileges = Privilege::all();
        return view('backend.pages.privileges.index', compact('privileges'));
    }

    public function create()
    {
        return view('backend.pages.privileges.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:privileges,slug',
            'description' => 'nullable|string|max:255',
        ]);

        Privilege::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect()->route('privileges.index')->with('success', 'Privilege created successfully.');
    }

    public function edit(Privilege $privilege)
    {
        return view('backend.pages.privileges.edit', compact('privilege'));
    }

    public function update(Request $request, Privilege $privilege)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:privileges,slug,' . $privilege->id,
            'description' => 'nullable|string|max:255',
        ]);

        $privilege->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
        ]);

        return redirect()->route('privileges.index')->with('success', 'Privilege updated successfully.');
    }

    public function destroy(Privilege $privilege)
    {
        $privilege->delete();
        return redirect()->route('privileges.index')->with('success', 'Privilege deleted successfully.');
    }
}
