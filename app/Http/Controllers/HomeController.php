<?php

namespace App\Http\Controllers;

use App\Models\Salon;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salon_manager;
use App\Models\Manager;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $salons = Salon::with('salonManager')->get();
        return view('home', ['users' => $users, 'salons' => $salons]);
    }
}
