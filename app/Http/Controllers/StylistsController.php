<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StylistsController extends Controller
{
    public function index()
    {
        return view('stylists');
    }
}
