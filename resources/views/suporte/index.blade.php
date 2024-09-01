<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mecas de Titânio - Suporte</title>
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
        .alert {
            background-color: #00d4ff;
            color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
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
            font-size: 24px;
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
        table, th, td {
            border: 1px solid #333;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #1e1e1e;
            color: #00d4ff;
        }
        tr:nth-child(even) {
            background-color: #1e1e1e;
        }
        tr:hover {
            background-color: #333;
        }
        button {
            background-color: #ff4a57;
            color: #fff;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background-color: #ff1a2a;
        }
        textarea {
            width: 100%;
            height: 100px;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #333;
            background-color: #333;
            color: #fff;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border-radius: 4px;
            border: 1px solid #333;
            background-color: #333;
            color: #fff;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #24243e;
            color: #00d4ff;
            font-size: 16px;
            margin-top: 20px;
        }
        #map {
            height: 400px;
            width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .contact-info {
            background-color: #1e1e1e;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }
        .contact-info h2 {
            color: #00d4ff;
            font-size: 24px;
            margin-bottom: 10px;
        }
        .contact-info p {
            color: #cccccc;
            margin: 5px 0;
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
            <h1>Suporte ao Cliente</h1>
            <p>Envie uma mensagem e veja as mensagens recebidas.</p>
        </div>
        
        <!-- Seção de Envio de Mensagens -->
        <div class="content-section">
            <h2>Envio de Mensagens</h2>
            <form action="{{ route('suporte.store') }}" method="POST">
                @csrf
                <div>
                    <label for="mensagem">Mensagem:</label>
                    <textarea id="mensagem" name="mensagem" required></textarea>
                </div>
                <button type="submit">Enviar Mensagem</button>
                @if(session('status'))
                    <div class="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </form>
        </div>

        <!-- Seção de Listagem de Mensagens -->
        <div class="content-section">
            <h2>Mensagens Recebidas</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mensagem</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mensagens as $mensagem)
                        <tr>
                            <td>{{ $mensagem->id }}</td>
                            <td>{{ $mensagem->mensagem }}</td>
                            <td>
                                <form action="{{ route('suporte.destroy', $mensagem->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta mensagem?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Seção de Contato -->
        <div class="contact-info">
            <h2>Detalhes de Contato</h2>
            <p><strong>Telefone:</strong> +55 11 98765-4321</p>
            <p><strong>Email:</strong> suporte@mecasdetitanio.com.br</p>
        </div>
        
        <!-- Seção do Mapa -->
        <div class="content-section">
            <h2>Localização</h2>
            <div id="map"></div>
        </div>
    </div>
    <div class="footer">
        <p>© 2024 Mecas de Titânio. Todos os direitos reservados.</p>
    </div>

    <!-- Script do Google Maps -->
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    <script>
        function initMap() {
            var mapOptions = {
                center: { lat: -23.550520, lng: -46.633308 }, // Defina as coordenadas do local desejado
                zoom: 12,
                styles: [
                    {
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#757575"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.country",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.neighborhood",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#6c6c6c"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#181818"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#616161"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#1b1b1b"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#2c2c2c"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#8a8a8a"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#212121"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#746855"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#1f1f1f"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#9e9e9e"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#3d3d3d"
                            }
                        ]
                    }
                ]
            };
            var map = new google.maps.Map(document.getElementById('map'), mapOptions);
        }
    </script>
</body>
</html>
