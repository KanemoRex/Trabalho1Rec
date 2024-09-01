<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio - Categorias</title>
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'figtree', sans-serif;
            color: #e0e0e0;
            margin: 0;
            padding: 0;
            background-color: #0d0d0d;
        }
        .container {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #ffffff;
            font-size: 32px;
        }
        .content-section {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
        }
        .content-section h2 {
            color: #00d4ff;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .content-section p {
            color: #cccccc;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Categorias de Mecas</h1>
            <p>Explore nossas categorias de mechas e encontre o que melhor atende suas necessidades.</p>
        </div>
        <div class="content-section">
            <h2>Combate</h2>
            <p>Mecas projetados para batalha com armaduras pesadas e armas de alto calibre.</p>
        </div>
        <div class="content-section">
            <h2>Suporte</h2>
            <p>Mecas de suporte com ferramentas para reparo e auxílio técnico em campo.</p>
        </div>
        <div class="content-section">
            <h2>Exploração</h2>
            <p>Mecas especializados em exploração de terrenos desconhecidos com sensores avançados.</p>
        </div>
    </div>
</body>
</html>
