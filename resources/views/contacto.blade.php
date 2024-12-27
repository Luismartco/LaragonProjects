<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aqui se mostrará la info del contacto pesca bicho</h1>
    @include('partials.navigation')
    @foreach ( $posts as $post )
        {{ $post['title'] }} 
    @endforeach
</body>
</html>