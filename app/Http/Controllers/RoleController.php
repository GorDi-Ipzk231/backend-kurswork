<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return view('role.role', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => 'required|max:255',
        ]);

        $post = new Role();
        $post::create([
            'name' => $request->name,
        ]);

        return redirect()->route('role.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $role = Role::find($id);
        return view('role.show', ['role' => $role]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        // return view('role.edit', ['role' => $role]);
        return view('admin.role.edit', compact('role'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $role = Role::find($id); // Find the existing role by ID
        $role->name = $request->name; // Update the name
        $role->save(); // Save the changes

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->route('role.index');
    }
}
