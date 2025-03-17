<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuaris amb Comandes</title>
</head>
<body>
    <h1>Usuaris amb almenys una comanda:</h1>
    <ul>
        @foreach($usuaris as $usuari)
            <li>{{ $usuari->nom }} — Comandes: {{ $usuari->comandas_count }}</li>
        @endforeach
    </ul>
</body>
</html>
