<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">
</head>
<body>
    <header>
    <img src="{{ asset('imagens/image9.jpg') }}">
    </header>
    <section>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <h3>Junte-se a Nossas Comunidades</h3><br>
        <text>Obtenha mais recursos e privilégios ingressando em nossa comunidade</text>
        <label for="name" class="col-md-4 col-form-label text-md-right"></label>
        <input  id="name" type="text" placeholder ="Nome"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="email" class="col-md-4 col-form-label text-md-right"></label>
        <input id="email" type="email" placeholder ="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="password" class="col-md-4 col-form-label text-md-right"></label>
        <input id="password" type="password" placeholder ="Senha"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"><br>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <input id="password-confirm" type="password" placeholder ="Repita a Senha" class="form-control" name="password_confirmation" required autocomplete="new-password">
        <img src="{{ asset('imagens/image11.jpg') }}"><br>
        <button type="submit" class="btn btn-primary">
            {{ __('Confirme') }}
        </button><br>
        <button type="submit"><a href="{{ route('login') }}">Logar</a></button>
    </form>    
    </section>
</body>
</html>