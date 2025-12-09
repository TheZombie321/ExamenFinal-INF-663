<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Registrar Nuevo Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Precio:</label><br>
        <input type="number" step="0.01" name="precio" required><br><br>

        <label>Stock:</label><br>
        <input type="number" name="stock" required><br><br>

        <label>Categoría:</label><br>
        <input type="text" name="categoria" required><br><br>

        <button type="submit">Guardar Producto</button>
    </form>
    
    <br>
    <a href="{{ route('productos.index') }}">Volver a la lista</a>
</body>
</html>