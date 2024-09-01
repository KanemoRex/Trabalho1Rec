<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MecasController extends Controller
{
    public function index()
    {
        return view('mecas'); // Certifique-se de que você tem um arquivo mecas.blade.php em resources/views
    }
}

