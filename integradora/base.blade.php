<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasteleria La Espiga</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 760px;
            margin: 0 auto;
            padding: 2rem;
            color: #3c2a21;
            background: #fff8f0;
        }
        h1 { color: #8b4513; }
        main { background: #fff; padding: 1.5rem; border-radius: 8px; }
        label { display: block; margin-top: 1rem; margin-bottom: .35rem; }
        input { padding: .5rem; width: 100%; max-width: 24rem; }
        button, a { color: #8b4513; }
        button { margin-top: 1rem; padding: .6rem 1rem; cursor: pointer; }
        .errores { color: #a11; }
        footer { margin-top: 2rem; font-size: .9rem; }
    </style>
</head>
<body>
    <header>
        <h1>Pasteleria La Espiga</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>Integradora - JARED AGUIRRE ROSAS - 27 de octubre de 2026</footer>
</body>
</html>
