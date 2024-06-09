<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;

class SalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salons = Salon::all();
        return view('salon.salon', ['salons' => $salons]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);

        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255',
            'address' => 'required|max:500',
        ]);

        $post = new Salon();
        $post::create([
            'name' => $request->name,
            'description' => $request->description,
            'contact_phone' => $request->contact_phone,
            'contact_email' => $request->contact_email,
            'address' => $request->address,
        ]);

        return redirect()->route('salon.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salon = Salon::find($id);
        return view('salon.show', ['salon' => $salon]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salon = Salon::find($id);
        return view('salon.edit', ['salon' => $salon]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255',
            'address' => 'required|max:500',
        ]);

        $salon = Salon::find($id); // Find the existing salon by ID
        $salon->name = $request->name; // Update the first_name
        $salon->description = $request->description; // Update the last_name
        $salon->contact_phone = $request->contact_phone; // Update the contact_phone
        $salon->contact_email = $request->contact_email; // Update the contact_email
        $salon->address = $request->address; // Update the address
        $salon->save(); // Save the changes

        return redirect()->route('salon.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salon = Salon::find($id);
        $salon->delete();
        return redirect()->route('salon.index');
    }
}
