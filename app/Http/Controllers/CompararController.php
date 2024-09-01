<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompararController extends Controller
{
    public function index()
    {
        return view('comparar'); // Certifique-se de que você tem um arquivo comparar.blade.php em resources/views
    }
}
