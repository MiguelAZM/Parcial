<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
</head>
<body>
    <h1>Detalle del Producto</h1>
    <p>Nombre: {{ $productos->nombre }}</p>
    <p>Marca: {{ $productos->marca }}</p>
    <p>tipo: {{$productos->tipo}}</p>
</body>
</html>
