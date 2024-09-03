<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio - Peças</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
            font-size: 18px;
            line-height: 1.6;
        }
        nav {
            background: linear-gradient(90deg, #0f0c29, #302b63, #24243e);
            padding: 15px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.75);
        }
        nav a {
            color: #00d4ff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }
        nav a:hover {
            color: #ff4a57;
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 100px auto 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #ffffff;
            font-size: 32px;
            margin-bottom: 10px;
        }
        .header a {
            display: inline-block;
            background-color: #00d4ff;
            color: #0d0d0d;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 18px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .header a:hover {
            background-color: #00b0ff;
        }
        .header p {
            color: #aaaaaa;
        }
        .content-section {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .content-section ul {
            list-style-type: none;
            padding: 0;
        }
        .content-section li {
            background-color: #2e2e2e;
            padding: 15px;
            border-radius: 4px;
            margin-bottom: 10px;
            color: #cccccc;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .content-section li strong {
            color: #00d4ff;
        }
        .content-section a {
            display: inline-block;
            background-color: #00d4ff;
            color: #0d0d0d;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 16px;
            text-decoration: none;
            font-weight: bold;
            margin-right: 10px;
            transition: background-color 0.3s;
        }
        .content-section a:hover {
            background-color: #00b0ff;
        }
        .content-section button {
            background-color: #ff4a57;
            color: #0d0d0d;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .content-section button:hover {
            background-color: #e03e3e;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #24243e;
            color: #00d4ff;
            font-size: 16px;
            margin-top: 20px;
        }
        .chat-button {
            display: inline-block;
            background-color: #0088cc;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 4px;
            font-size: 18px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 10px;
            transition: background-color 0.3s;
        }
        .chat-button:hover {
            background-color: #007bb5;
        }
    </style>
</head>
<body>
    <nav>
    <a href="/">Início</a>
        <a href="/mecas">Mecas</a>
        <a href="/suporte">Suporte</a>
        <a href="/categorias">Categorias</a>
        <a href="/comparar">Comparar</a>
        <a href="/pecas">Peças</a>
    </nav>
    <div class="container">
        <div class="header">
            <h1>Peças de Mecas</h1>
            <a href="{{ route('pecas.create') }}">Adicionar Nova Peça</a>
            @if($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <a href="https://t.me/SeuBotTelegram" class="chat-button">Iniciar Chat no Telegram</a>
        </div>
        <div class="content-section">
            <ul>
                @foreach ($pecas as $peca)
                    <li>
                        <strong>{{ $peca->nome }}</strong> - {{ $peca->descricao }} - ${{ $peca->preco }}
                        <div>
                            <a href="{{ route('pecas.edit', $peca->id) }}">Editar</a>
                            <form action="{{ route('pecas.destroy', $peca->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Deletar</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>
</body>
</html>
