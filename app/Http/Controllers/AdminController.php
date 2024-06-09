<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Додаємо middleware для перевірки аутентифікації
        $this->middleware('role:admin'); // Додаємо middleware для перевірки ролі "admin"
    }

    public function address()
    {
        if (!auth()->user()->hasRole('admin')) {
            abort(403);
        }

        // Додаткова логіка для адмінської сторінки адрес
    }

}
