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
        <tr>
            <th>test</th>
            <th>number_text</th>
            <th>description</th>
        </tr>
        @forelse ($prueba as $test )
            <tr>
                <td>{{$test->test}}</td>
                <td>{{$test->number_text}}</td>
                <td>{{$test->description}}</td>
            </tr>
        @empty
            <tr>
                <p>No se encontraron datos</p>
            </tr>
        @endforelse
    </table>
</body>
</html>