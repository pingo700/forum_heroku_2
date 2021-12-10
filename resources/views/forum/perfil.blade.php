<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

</head>
<body>
    <header>
        <img  src="{{ asset('imagens/lissin.jpg') }}">
        <text>{{ auth()->user()->name }}</text>  
    </header>
    <section>
        <div>
        </div>
         <form method="POST" action="{{url('assuntos')}}">
           @csrf
           @method("POST")
           <label for="exampleFormControlInput1">Sobre:</label>
           <input type="text" class="form-control" id="exampleFormControlInput1" name="sobre" placeholder="Digite aqui..."><br>
            <label for="exampleFormControlTextarea1">Data:</label>
            <input type="date" name="data">
           <button type="submit" class="btn btn-primary">
               <a href="" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Publicar</a>         
           </button>
          </form>
          <a href="{{ url('/judo')}}">
             <img  class="judo"  src="{{ asset('imagens/judo.jpg') }}"><br>
          </a>  
    </section>
    <footer>
         <div>
         </div>
    </footer>
</body>
</html>