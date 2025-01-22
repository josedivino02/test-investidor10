<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

</head>

<body>
    <x-header />

    <main class="container">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
