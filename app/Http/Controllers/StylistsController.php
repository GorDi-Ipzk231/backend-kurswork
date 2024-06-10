<?php

namespace App\Http\Controllers;

use App\Models\Stylist;
use Illuminate\Http\Request;

class StylistsController extends Controller
{
    public function index()
    {
        $stylists = Stylist::all();
        return view('stylists', compact('stylists'));
    }
}
