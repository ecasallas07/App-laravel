<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
    {{-- //Se usa include en este caso porque al ser este elemento un layout no se puede usar el section, sino se usa el include para traer de la carpeta
    partials que se ubica en layouts --}}
    @include('layouts.partials.menu')
    @yield('content')
    @include('layouts.partials.footer')

</body>
</html>