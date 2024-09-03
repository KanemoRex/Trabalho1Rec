<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio - Jogo de Comparação</title>
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
            font-size: 36px;
            margin-bottom: 10px;
        }
        .header p {
            color: #aaaaaa;
            font-size: 20px;
        }
        .content-section {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .content-section h2 {
            color: #00d4ff;
            font-size: 28px;
            margin-bottom: 10px;
        }
        .content-section p {
            color: #cccccc;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table th, table td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        table th {
            background-color: #24243e;
            color: #ffffff;
            font-size: 20px;
        }
        table td {
            background-color: #2d2d2d;
            color: #e0e0e0;
        }
        .comparison-chart {
            margin: 20px 0;
        }
        .action-buttons {
            text-align: center;
            margin-top: 20px;
        }
        .action-buttons button {
            background-color: #00d4ff;
            color: #0d0d0d;
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            margin: 0 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .action-buttons button:hover {
            background-color: #ff4a57;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .action-buttons button:focus {
            outline: none;
            box-shadow: 0 0 0 3px rgba(0, 212, 255, 0.5);
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #24243e;
            color: #00d4ff;
            font-size: 16px;
            margin-top: 20px;
        }
        .game-container {
            text-align: center;
        }
        .mech-selector {
            margin: 20px 0;
        }
        .mech-selector select {
            padding: 12px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: #2d2d2d;
            color: #e0e0e0;
            margin: 0 10px;
        }
        .mech-info {
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            background-color: #2d2d2d;
            color: #ffffff;
        }
        .battle-result {
            font-size: 20px;
            color: #ff4a57;
            margin: 20px 0;
        }
        .battle-log {
            font-size: 16px;
            color: #cccccc;
            margin: 20px 0;
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
            <h1>Jogo de Comparação de Mecas</h1>
            <p>Escolha suas mechas, personalize-as e veja quem sai vencedor!</p>
        </div>
        <div class="game-container">
            <div class="mech-selector">
                <h2>Selecione as Mecas</h2>
                <select id="mech-select-a">
                    <option value="mech-a1" data-armor="100" data-speed="150" data-firepower="200">Meca A1</option>
                    <option value="mech-a2" data-armor="120" data-speed="160" data-firepower="220">Meca A2</option>
                    <option value="mech-a3" data-armor="110" data-speed="140" data-firepower="210">Meca A3</option>
                </select>
                <select id="mech-select-b">
                    <option value="mech-b1" data-armor="90" data-speed="130" data-firepower="180">Meca B1</option>
                    <option value="mech-b2" data-armor="100" data-speed="140" data-firepower="190">Meca B2</option>
                    <option value="mech-b3" data-armor="95" data-speed="150" data-firepower="200">Meca B3</option>
                </select>
                <button id="compare-btn">Comparar Mecas</button>
            </div>
            <div class="mech-info" id="mech-info-a">
                <h3>Meca Selecionada A</h3>
                <p><strong>Armadura:</strong> <span id="armor-a">100</span></p>
                <p><strong>Velocidade:</strong> <span id="speed-a">150</span></p>
                <p><strong>Poder de Fogo:</strong> <span id="firepower-a">200</span></p>
            </div>
            <div class="mech-info" id="mech-info-b">
                <h3>Meca Selecionada B</h3>
                <p><strong>Armadura:</strong> <span id="armor-b">90</span></p>
                <p><strong>Velocidade:</strong> <span id="speed-b">130</span></p>
                <p><strong>Poder de Fogo:</strong> <span id="firepower-b">180</span></p>
            </div>
            <div class="battle-result" id="battle-result">
                <h2>Resultado da Batalha</h2>
                <p>Selecione as mecas para comparar.</p>
            </div>
            <div class="battle-log" id="battle-log">
                <h3>Histórico da Batalha</h3>
                <p>O resultado da batalha será exibido aqui.</p>
            </div>
        </div>
        <div class="comparison-chart">
            <canvas id="chart"></canvas>
        </div>
        <div class="action-buttons">
            <button id="print-btn">
                <span>🖨️ Imprimir Relatório</span>
            </button>
            <button id="export-btn">
                <span>📄 Exportar para PDF</span>
            </button>
            <button id="email-btn">
                <span>📧 Enviar por Email</span>
            </button>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.getElementById('compare-btn').addEventListener('click', function() {
            // Obtendo valores das mecas selecionadas
            const mechA = document.getElementById('mech-select-a').selectedOptions[0];
            const mechB = document.getElementById('mech-select-b').selectedOptions[0];

            // Atualizando as informações das mecas
            document.getElementById('armor-a').textContent = mechA.getAttribute('data-armor');
            document.getElementById('speed-a').textContent = mechA.getAttribute('data-speed');
            document.getElementById('firepower-a').textContent = mechA.getAttribute('data-firepower');

            document.getElementById('armor-b').textContent = mechB.getAttribute('data-armor');
            document.getElementById('speed-b').textContent = mechB.getAttribute('data-speed');
            document.getElementById('firepower-b').textContent = mechB.getAttribute('data-firepower');

            // Atualizando o gráfico
            updateChart(mechA, mechB);
        });

        function updateChart(mechA, mechB) {
            const armorA = parseInt(mechA.getAttribute('data-armor'));
            const speedA = parseInt(mechA.getAttribute('data-speed'));
            const firepowerA = parseInt(mechA.getAttribute('data-firepower'));

            const armorB = parseInt(mechB.getAttribute('data-armor'));
            const speedB = parseInt(mechB.getAttribute('data-speed'));
            const firepowerB = parseInt(mechB.getAttribute('data-firepower'));

            const ctx = document.getElementById('chart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Armadura', 'Velocidade', 'Poder de Fogo'],
                    datasets: [{
                        label: 'Meca A',
                        data: [armorA, speedA, firepowerA],
                        backgroundColor: 'rgba(0, 212, 255, 0.5)',
                        borderColor: 'rgba(0, 212, 255, 1)',
                        borderWidth: 1
                    }, {
                        label: 'Meca B',
                        data: [armorB, speedB, firepowerB],
                        backgroundColor: 'rgba(255, 74, 87, 0.5)',
                        borderColor: 'rgba(255, 74, 87, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>
