<!DOCTYPE html>
<html lang="es">    
<head>
    <meta charset="UTF-8">
    <title>Petshop Mimositos</title>
    <!-- Usamos asset() para que Laravel cargue bien los archivos públicos -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <h1 class="Titulo">Petshop Mimositos</h1>
        <h2>Bienvenidos a nuestra web caseritos</h2>       
    </header>

    <nav>
        <button id="menu-hamburguesa">☰</button>
        <ul>
            <li><a href="{{ url('/') }}#Perros">Perros</a></li>
            <li><a href="{{ url('/') }}#Gatos">Gatos</a></li>
            <li><a href="{{ url('/') }}#Hamsters">Hamsters</a></li>
            <li><a href="{{ url('/contacto') }}">Contacto</a></li>
            <li><a href="#pie-pagina">Pie de página</a></li>
            <button id="boton-oscuro">🌙 Modo Oscuro</button>
        </ul>
    </nav>

    <main>
        <!-- Aquí se inyecta el contenido de cada vista -->
        @yield('contenido')
    </main>

    <footer id="pie-pagina">
        <p>&copy; 2026 Mimositos, Choque Candia Nicolas</p>
    </footer>

    <script src="{{ asset('script.js') }}" defer></script>
</body>
</html>