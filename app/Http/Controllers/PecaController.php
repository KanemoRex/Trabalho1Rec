<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peca;

class PecaController extends Controller
{
    public function index()
    {
        // Recupera todas as peças do banco de dados
        $pecas = Peca::all();
        // Retorna a view index com a variável $pecas
        return view('pecas.index', compact('pecas'));
    }

    public function create()
    {
        // Retorna a view de criação de peça
        return view('pecas.create');
    }

    public function store(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
        ]);

        // Cria uma nova peça com os dados validados
        Peca::create($request->all());

        // Redireciona para a lista de peças com uma mensagem de sucesso
        return redirect()->route('pecas.index')->with('success', 'Peça criada com sucesso.');
    }

    public function edit(Peca $peca)
    {
        // Retorna a view de edição com os dados da peça específica
        return view('pecas.edit', compact('peca'));
    }

    public function update(Request $request, Peca $peca)
    {
        // Valida os dados do formulário
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string',
            'preco' => 'required|numeric',
        ]);

        // Atualiza a peça com os dados validados
        $peca->update($request->all());

        // Redireciona para a lista de peças com uma mensagem de sucesso
        return redirect()->route('pecas.index')->with('success', 'Peça atualizada com sucesso.');
    }

    public function destroy(Peca $peca)
    {
        // Deleta a peça específica
        $peca->delete();

        // Redireciona para a lista de peças com uma mensagem de sucesso
        return redirect()->route('pecas.index')->with('success', 'Peça deletada com sucesso.');
    }
}
