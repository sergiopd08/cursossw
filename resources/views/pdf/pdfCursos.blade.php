<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{$curso->id}}</td>
                <td>{{$curso->nombre}}</td>
                <td>{{$curso->idioma}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>