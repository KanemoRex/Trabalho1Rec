<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuporteController extends Controller
{
    public function index()
    {
        return view('suporte'); // Certifique-se de que você tem um arquivo suporte.blade.php em resources/views
    }
}

