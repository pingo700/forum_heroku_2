<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <img src="{{ asset('imagens/image9.jpg') }}">
    </header>
    <section>
        <h3>Nós sentimos sua falta!</h3><br>
        <text>Mais de 150 perguntas estão esperando por suas sugestões sábias!</text>
        <form  method="POST" action="{{ route('login') }}" >
          @csrf
          <input id="email" type="email" placeholder ="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus><br>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span><br>
          @enderror
          <input id="password" type="password" placeholder ="Senha" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"><br>
          @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <button type="submit" class="btn btn-primary">{{ __('Login') }}</button><br>
        </form>
         <button>
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrar-se</a>
          </button>
        <img src="{{ asset('imagens/image11.jpg') }}">
    </section>
    <button class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">
             <a class="btn btn-link" href="{{ route('password.request') }}">{{ __('Esqueceu sua senha ?') }}</a><br>
    </button> 
</body>
</html>