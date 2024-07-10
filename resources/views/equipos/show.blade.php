<!DOCTYPE html>
<html>
<head>
    <title>Detalle del Equipo</title>
</head>
<body>
    <h1>Detalle del Equipo</h1>
    <p>Placa: {{ $equipo->placa }}</p>
    <p>Tipo: {{ $equipo->tipo }}</p>
    <p>Marca: {{ $equipo->marca }}</p>
    <p>Modelo: {{ $equipo->modelo }}</p>
    <p>Serial: {{ $equipo->serial }}</p>
    <p>Procesador: {{ $equipo->procesador }}</p>
    <p>RAM: {{ $equipo->ram }}</p>
    <p>Storage: {{ $equipo->storage }}</p>
    <p>SO: {{ $equipo->so }}</p>
    <a href="{{ route('equipos.index') }}">Volver</a>
</body>
</html>