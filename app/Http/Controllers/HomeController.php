<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome'); // Certifique-se de que você tem um arquivo home.blade.php em resources/views
    }
}
