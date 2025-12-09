<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
    <style>
        table, th, td { border: 1px solid black; border-collapse: collapse; padding: 8px; }
    </style>
</head>
<body>
    <h1>Listado de Productos</h1>
    
    <a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>
    <br><br>
    <h1>Listado de Productos</h1>
    
    <a href="{{ route('productos.create') }}">Crear Nuevo Producto</a>
    
    | <a href="{{ route('productos.stockAlto') }}" style="color: green; font-weight: bold;">
        Filtrar Stock Alto (>5)
    </a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $prod)
                <tr>
                    <td>{{ $prod->id }}</td>
                    <td>{{ $prod->nombre }}</td>
                    <td>{{ $prod->precio }}</td>
                    <td>{{ $prod->stock }}</td>
                    <td>{{ $prod->categoria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>