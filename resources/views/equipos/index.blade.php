<!DOCTYPE html>
<html>
<head>
    <title>Equipos</title>
</head>
<body>
    <h1>Equipos</h1>
    <a href="{{ route('equipos.create') }}">Crear Equipo</a>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    <table>
        <thead>
            <tr>
                <th>Placa</th>
                <th>Tipo</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Serial</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>Storage</th>
                <th>SO</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->placa }}</td>
                    <td>{{ $equipo->tipo }}</td>
                    <td>{{ $equipo->marca }}</td>
                    <td>{{ $equipo->modelo }}</td>
                    <td>{{ $equipo->serial }}</td>
                    <td>{{ $equipo->procesador }}</td>
                    <td>{{ $equipo->ram }}</td>
                    <td>{{ $equipo->storage }}</td>
                    <td>{{ $equipo->so }}</td>
                    <td>
                        <a href="{{ route('equipos.edit', $equipo->id) }}">Editar</a>
                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
