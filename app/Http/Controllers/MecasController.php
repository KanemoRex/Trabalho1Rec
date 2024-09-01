<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MecasController extends Controller
{
    public function index()
    {
        return view('mecas');
    }
}
