<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="{{ asset('css/judo.css') }}" rel="stylesheet">
</head>
<body>
    <section>
        <div>
            
        </div>
            <img  src="{{ asset('imagens/judo.jpg') }}"><br>
            </table>
            <form method="POST" action="{{url('comentarios')}}">
              @csrf
              @method("POST")
              <input type="text" class="ca" id="exampleFormControlInput1" name="texto" placeholder="Digite aqui..."><br>
              <button type="submit" class="btn btn-primary">
                <a href="" class="">Enviar</a>         
              </button>
            </form>
    </section>
    <footer>
         <div>
         </div>
    </footer>
</body>
</html>