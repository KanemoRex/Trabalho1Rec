<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mensagem; // Adicione esta linha

class SuporteController extends Controller
{
    public function index()
    {
        $mensagens = Mensagem::all();
        return view('suporte.index', compact('mensagens'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'mensagem' => 'required|string',
        ]);

        // Cria a mensagem
        Mensagem::create($request->only('mensagem'));

        // Redireciona para a página de suporte com uma mensagem de sucesso
        return redirect('/suporte')->with('status', 'Mensagem enviada com sucesso!');
    }

    public function destroy($id)
    {
        $mensagem = Mensagem::findOrFail($id);
        $mensagem->delete();

        // Redireciona de volta para a página de suporte com uma mensagem de sucesso
        return redirect('/suporte')->with('status', 'Mensagem deletada com sucesso!');
    }
}
