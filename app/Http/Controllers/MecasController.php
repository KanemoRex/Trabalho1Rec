<?php

// app/Http/Controllers/MecasController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meca;

class MecasController extends Controller
{
    public function index()
    {
        $mecas = Meca::all();
        return view('mecas.index', compact('mecas'));
    }

    public function create()
    {
        return view('mecas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);

        Meca::create($request->all());

        return redirect()->route('mecas.index')->with('success', 'Meca criado com sucesso.');
    }

    public function show($id)
    {
        $meca = Meca::findOrFail($id);
        return view('mecas.show', compact('meca'));
    }

    public function edit($id)
    {
        $meca = Meca::findOrFail($id);
        return view('mecas.edit', compact('meca'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required',
            'descricao' => 'required',
        ]);

        $meca = Meca::findOrFail($id);
        $meca->update($request->all());

        return redirect()->route('mecas.index')->with('success', 'Meca atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $meca = Meca::findOrFail($id);
        $meca->delete();

        return redirect()->route('mecas.index')->with('success', 'Meca deletado com sucesso.');
    }
}

