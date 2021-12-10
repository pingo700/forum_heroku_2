<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redefinir Senha</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/redefinir.css') }}" rel="stylesheet">
</head>
<body>
    <div>
      <img src="{{ asset('imagens/image9.jpg') }}">
    </div>
    <section>
        <h3>Perdeus sua senha ?</h3><br>
        <text>Vamos lhe enviar um email de redefinição !!!</text>
    </section>
    <div>
    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" placeholder="Email"class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder ="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar') }}
                                </button>
                            </div>
                        </div>
                    </form>
    </div>
</body>
</html>