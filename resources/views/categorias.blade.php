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
            font-size: 18px;
            line-height: 1.6;
        }
        nav {
            background: linear-gradient(90deg, #0f0c29, #302b63, #24243e); /* Cores futuristas em degradê */
            padding: 15px 0;
            text-align: center;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.75); /* Sombra para um efeito futurista */
        }
        nav a {
            color: #00d4ff;
            text-decoration: none;
            margin: 0 20px;
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase; /* Texto em maiúsculas para um visual mais impactante */
        }
        nav a:hover {
            color: #ff4a57; /* Cor vibrante ao passar o mouse */
            text-decoration: underline;
        }
        .container {
            max-width: 1200px;
            margin: 100px auto 0 auto; /* Ajuste do espaçamento para compensar o menu */
            padding: 20px;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #ffffff;
            font-size: 32px; /* Tamanho da fonte maior para destacar o título */
            margin-bottom: 10px;
        }
        .header p {
            color: #aaaaaa;
        }
        .content-section {
            background-color: #1e1e1e; /* Fundo escuro para contraste */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra sutil para destacar as seções */
            margin-bottom: 20px; /* Espaçamento entre as seções */
            display: flex; /* Flexbox para layout */
            align-items: center; /* Alinhamento vertical */
            gap: 20px; /* Espaçamento entre imagem e texto */
        }
        .content-section img {
            width: 150px; /* Largura das imagens */
            height: auto; /* Manter a proporção */
            border-radius: 8px; /* Borda arredondada */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra para as imagens */
        }
        .content-section h2 {
            color: #00d4ff; /* Cor futurista */
            font-size: 24px;
            margin-bottom: 10px;
        }
        .content-section p {
            color: #cccccc;
            margin-bottom: 10px;
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
        <a href="/pecas">Peças</a>
    </nav>
    <div class="container">
        <div class="header">
            <h1>Categorias de Mecas</h1>
            <p>Explore nossas categorias de mechas e encontre o que melhor atende suas necessidades.</p>
        </div>
        <div class="content-section">
            <img src="images/ut1.jpg" alt="Combate">
            <div>
                <h2>Combate</h2>
                <p>Mecas projetados para batalha com armaduras pesadas e armas de alto calibre.</p>
            </div>
        </div>
        <div class="content-section">
            <img src="images/ut2.jpg" alt="Suporte">
            <div>
                <h2>Suporte</h2>
                <p>Mecas de suporte com ferramentas para reparo e auxílio técnico em campo.</p>
            </div>
        </div>
        <div class="content-section">
            <img src="images/ut3.jpg" alt="Exploração">
            <div>
                <h2>Exploração</h2>
                <p>Mecas especializados em exploração de terrenos desconhecidos com sensores avançados.</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>
</body>
</html>
