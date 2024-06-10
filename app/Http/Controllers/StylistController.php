<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;

class STylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stylists = Stylist::all();
        return view('stylist.stylist', ['stylists' => $stylists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stylist.create');
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
            'img_url' => 'required|max:500',
        ]);

        $post = new Stylist();
        $post::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'contact_phone' => $request->contact_phone,
            'contact_email' => $request->contact_email,
            'img_url' => $request->img_url,
        ]);

        return redirect()->route('stylist.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $stylist = Stylist::find($id);
        return view('stylist.show', ['stylist' => $stylist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $stylist = Stylist::find($id);
        return view('stylist.edit', ['stylist' => $stylist]);
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
            'img_url' => 'required|max:500',
        ]);

        $stylist = Stylist::find($id); // Find the existing stylist by ID
        $stylist->first_name = $request->first_name; // Update the first_name
        $stylist->last_name = $request->last_name; // Update the last_name
        $stylist->contact_phone = $request->contact_phone; // Update the contact_phone
        $stylist->contact_email = $request->contact_email; // Update the contact_email
        $stylist->img_url = $request->img_url; // Update the img_url
        $stylist->save(); // Save the changes

        return redirect()->route('stylist.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $stylist = Stylist::find($id);
        $stylist->delete();
        return redirect()->route('stylist.index');
    }
}
