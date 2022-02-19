<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear</title>
</head>
<body>
    <h1>Create</h1>
    <a href="{{route('funciones.index')}}">Back to list</a>
    <form method="POST" 
        action="{{route('funciones.store')}}">
        @csrf
        <label>Pelicula</label>
        <input type="text" name="pelicula">
        <br/>
        <label>Fecha</label>
        <textarea name="fecha" rows="6"></textarea>
        <br/>
        <label>Hora</label>
        <input type="text" name="hora">
        <br/>
        
        <br/>
        <button type="submit">Guargar nueva funcion</button>
    </form>
</body>
</html>