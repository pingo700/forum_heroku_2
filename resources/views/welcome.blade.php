<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="{{ asset('css\inicio.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <img src="{{ asset('imagens/image9.jpg') }}">
    </header>
    <section>
        <h3>Junte-se a nossa Comunidade !</h3><br>
        <text>Obtenha mais recursos e privilégios ingressando em nossa comunidade</text>
        <img src="{{ asset('imagens/image11.jpg') }}">
        <button type="submit" class="btn btn-primary">
          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>         
        </button><br>
        <button type="submit" class="btn btn-primary">
          <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registro</a>         
        </button>
    </section>
</body>
</html>
