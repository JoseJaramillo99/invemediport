<!DOCTYPE html>
<html>
<head>
    <title>Crear Equipo</title>
</head>
<body>
    <h1>Crear Equipo</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf
        <label>Placa:</label>
        <input type="text" name="placa">
        <label>Tipo:</label>
        <input type="text" name="tipo">
        <label>Marca:</label>
        <input type="text" name="marca">
        <label>Modelo:</label>
        <input type="text" name="modelo">
        <label>Serial:</label>
        <input type="text" name="serial">
        <label>Procesador:</label>
        <input type="text" name="procesador">
        <label>RAM:</label>
        <input type="text" name="ram">
        <label>Storage:</label>
        <input type="text" name="storage">
        <label>SO:</label>
        <input type="text" name="so">
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('equipos.index') }}">Volver</a>
</body>
</html>