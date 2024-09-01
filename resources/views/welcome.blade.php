<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Styles -->
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
            display: flex;
            flex-direction: column;
            gap: 20px;
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
   
    </nav>
    <div class="container">
        <div class="header">
            <h1>Bem-Vindo à Mecas de Titânio</h1>
            <p>A Corporação Nibelung tem o orgulho de apresentar Mecas de Titânio, seu portal para robôs mechas de última geração. Nossa missão é equipar pilotos e guerreiros com as melhores máquinas de combate para qualquer missão.</p>
        </div>
        <div class="content-section">
            <h2>A Lenda de Valkar</h2>
            <p>Em um distante planeta chamado Valkar, a loja Mecas de Titânio era conhecida por fornecer os robôs mechas mais avançados do universo. O comandante Erdrin e a engenheira Lyria procuraram a loja em busca de mechas para suas missões. Equipados com um modelo de combate pesado e um mecha de suporte técnico, enfrentaram invasões alienígenas e exploraram territórios desconhecidos. Com coragem e estratégia, protegeram Valkar, tornando-se lendas em seu tempo.</p>
        </div>
        <div class="content-section">
            <h2>Sobre Nós</h2>
            <p>Nós garantimos a qualidade e a segurança de cada mecha oferecido. Nossa equipe é composta por especialistas em engenharia robótica e inteligência artificial, que asseguram a alta performance e durabilidade de nossos produtos. Seja para defender seu planeta ou enfrentar desafios cósmicos, Mecas de Titânio é sua melhor escolha.</p>
            <p>Explore nosso catálogo e encontre o mecha que mudará sua batalha.</p>
        </div>
        <div class="content-section">
            <h2>Fundadores</h2>
            <p>Conheça as mentes por trás da Mecas de Titânio:</p>
            <ul>
                <li><strong>Lady Elysia:</strong> Uma das maiores engenheiras robóticas do sistema solar, Lady Elysia é a responsável pelo desenvolvimento dos mechas mais poderosos e inovadores.</li>
                <li><strong>Lord Drakar:</strong> Especialista em inteligência artificial e táticas de combate, Lord Drakar é o estrategista por trás das tecnologias que impulsionam nossos mechas.</li>
            </ul>
        </div>
        <div class="content-section">
            <h2>Nossos Produtos</h2>
            <p>Oferecemos uma ampla variedade de mechas, desde unidades de combate pesado a robôs de suporte e defesa. Cada mecha é meticulosamente projetado para garantir eficácia e segurança nas suas batalhas.</p>
        </div>
        <div class="content-section">
            <h2>Suporte</h2>
            <p>Se você tiver dúvidas ou precisar de orientação, nossa equipe está disponível para ajudar. Atendemos 24 horas por dia, prontos para conectar você ao mecha certo.</p>
        </div>
        <div class="content-section">
            <h2>Depoimentos</h2>
            <p>"Os mechas de Mecas de Titânio são verdadeiramente extraordinários! Eles foram cruciais em minhas missões." - Comandante Erdrin</p>
            <p>"A tecnologia avançada e a segurança nas transações me surpreenderam. Recomendo a todos os pilotos." - Engenheira Lyria</p>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>
</body>
</html>
