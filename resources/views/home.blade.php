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
         <form  method="POST" action="{{url('assunto')}}">
           <label for="exampleFormControlInput1">Tópico:</label>
           <input type="" class="form-control" id="exampleFormControlInput1" placeholder="Digite aqui..."><br>
            <label for="exampleFormControlTextarea1">Texto:</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
           <button type="submit" class="btn btn-primary">
               <a href="" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Publicar</a>         
           </button>
          </form>
          <a href="{{ url('/xadrez')}}" >
              <img  class="xadrez" src="{{ asset('imagens/xadrez.jpg') }}"><br>
          </a>
          <a href="{{ url('/judo')}}">
             <img  class="judo"  src="{{ asset('imagens/judo.jpg') }}"><br>
          </a>
          <a href="{{ url('/skate')}}">
             <img  class="skate" src="{{ asset('imagens/skate.jpg') }}"><br>
          </a>  
    </section>
    <footer>
         <div>
         </div>
    </footer>
</body>
</html>