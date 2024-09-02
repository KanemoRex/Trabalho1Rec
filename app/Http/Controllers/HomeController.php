<?php

// app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getMechas()
    {
        // Supondo que você tenha um modelo Mecha e um banco de dados configurado
        $mechas = \App\Models\Mecha::all(); // Obtém todos os mechas do banco de dados

        return response()->json($mechas);
    }
}
