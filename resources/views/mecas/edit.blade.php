<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio - Editar Meca</title>
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
            margin-bottom: 30px;
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
        .content-section {
            background-color: #1e1e1e;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin: 0 auto;
            max-width: 800px;
        }
        .content-section h2 {
            color: #00d4ff;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .content-section form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .content-section label {
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
        }
        .content-section input, .content-section textarea {
            background-color: #333;
            color: #e0e0e0;
            border: 1px solid #444;
            padding: 12px;
            border-radius: 4px;
            font-size: 16px;
            width: 100%;
        }
        .content-section textarea {
            resize: vertical;
            min-height: 100px;
        }
        .content-section button {
            background-color: #00d4ff;
            color: #0d0d0d;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            align-self: center;
        }
        .content-section button:hover {
            background-color: #00b0ff;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #24243e;
            color: #00d4ff;
            font-size: 16px;
            margin-top: 20px;
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
    </nav>
    <div class="container">
        <div class="header">
            <h1>Editar Meca</h1>
        </div>
        <div class="content-section">
            <form action="{{ route('mecas.update', $meca->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ $meca->nome }}" required>
                </div>
                <div>
                    <label for="descricao">Descrição:</label>
                    <textarea id="descricao" name="descricao" required>{{ $meca->descricao }}</textarea>
                </div>
                <button type="submit">Atualizar</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>
</body>
</html>
