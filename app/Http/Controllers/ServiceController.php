<?php

namespace App\Http\Controllers;

use App\Models\CustomerServiceRegistration;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $services = Service::all();
    //     return view('service.service', ['services' => $services]);
    //     // return view('welcome', ['services' => $services]);
    // }

    public function index()
    {
        $services = Service::all();
        return view('service.service', ['services' => $services])
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
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
        ]);

        $post = new Service();
        $post::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = Service::find($id);
        return view('service.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = Service::find($id);
        return view('service.edit', ['service' => $service]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
        ]);

        $service = Service::find($id); // Find the existing salon by ID
        $service->name = $request->name; // Update the name
        $service->description = $request->description; // Update the description
        $service->save(); // Save the changes

        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.index');
    }
}
