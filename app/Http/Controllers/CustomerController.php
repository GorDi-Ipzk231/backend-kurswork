<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customer.customer', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //dd($request);

    //     $request->validate([
    //         'first_name' => 'required|max:255',
    //         'last_name' => 'required|max:255',
    //         'contact_phone' => 'required|max:255',
    //         'contact_email' => 'required|max:255',
    //     ]);

    //     $post = new Customer();
    //     $post::create([
    //         'first_name' => $request->first_name,
    //         'last_name' => $request->last_name,
    //         'contact_phone' => $request->contact_phone,
    //         'contact_email' => $request->contact_email,
    //     ]);

    //     return redirect()->route('customer.index');

    // }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'contact_phone' => 'required|max:255',
            'contact_email' => 'required|max:255',
        ]);

        $post = new Customer();
        $post->first_name = $request->first_name;
        $post->last_name = $request->last_name;
        $post->contact_phone = $request->contact_phone;
        $post->contact_email = $request->contact_email;
        $post->save();

        return redirect()->back()->with('success', 'Registration successful!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customer.edit', ['customer' => $customer]);
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

        $customer = Customer::find($id); // Find the existing customer by ID
        $customer->first_name = $request->first_name; // Update the first_name
        $customer->last_name = $request->last_name; // Update the last_name
        $customer->contact_phone = $request->contact_phone; // Update the contact_phone
        $customer->contact_email = $request->contact_email; // Update the contact_email
        $customer->save(); // Save the changes

        return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
