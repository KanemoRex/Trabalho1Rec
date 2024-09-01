<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        return view('categorias'); // Certifique-se de que você tem um arquivo categorias.blade.php em resources/views
    }
}
