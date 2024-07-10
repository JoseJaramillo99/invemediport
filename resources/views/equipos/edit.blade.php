<!DOCTYPE html>
<html>
<head>
    <title>Editar Equipo</title>
</head>
<body>
    <h1>Editar Equipo</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Placa:</label>
        <input type="text" name="placa" value="{{ $equipo->placa }}">
        <label>Tipo:</label>
        <input type="text" name="tipo" value="{{ $equipo->tipo }}">
        <label>Marca:</label>
        <input type="text" name="marca" value="{{ $equipo->marca }}">
        <label>Modelo:</label>
        <input type="text" name="modelo" value="{{ $equipo->modelo }}">
        <label>Serial:</label>
        <input type="text" name="serial" value="{{ $equipo->serial }}">
        <label>Procesador:</label>
        <input type="text" name="procesador" value="{{ $equipo->procesador }}">
        <label>RAM:</label>
        <input type="text" name="ram" value="{{ $equipo->ram }}">
        <label>Storage:</label>
        <input type="text" name="storage" value="{{ $equipo->storage }}">
        <label>SO:</label>
        <input type="text" name="so" value="{{ $equipo->so }}">
        <button type="submit">Guardar</button>
    </form>
    <a href="{{ route('equipos.index') }}">Volver</a>
</body>
</html>