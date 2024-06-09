<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $managers = Manager::all();
        return view('manager.manager', ['managers' => $managers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255',
        ]);

        $post = new Manager();
        $post::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_phone' => $request->contact_phone,
            'contact_email' => $request->contact_email,
        ]);

        return redirect()->route('manager.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manager = Manager::find($id);
        return view('manager.show', ['manager' => $manager]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manager = Manager::find($id);
        return view('manager.edit', ['manager' => $manager]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255',
        ]);

        $manager = Manager::find($id); // Find the existing manager by ID
        $manager->first_name = $request->first_name; // Update the first_name
        $manager->last_name = $request->last_name; // Update the last_name
        $manager->contact_phone = $request->contact_phone; // Update the contact_phone
        $manager->contact_email = $request->contact_email; // Update the contact_email
        $manager->save(); // Save the changes

        return redirect()->route('manager.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $manager = Manager::find($id);
        $manager->delete();
        return redirect()->route('manager.index');
    }
}
