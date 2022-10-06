<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome Laravel</title>
</head>

<body>
    <h1>{{ $hello }} {{ $world }}</h1>
    @forelse ($lista_spesa as $item)
        <ul>
            <li>
                {{ $item }}
            </li>
        </ul>
    @empty
        <h3>Niente da comprare</h3>
    @endforelse
</body>

</html>
