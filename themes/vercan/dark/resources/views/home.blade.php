<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Dark</title>
    <style>
        body{
            background-color: black;
            font-family: 'Courier New', Courier, monospace;
            font-size: 40px;
            color: white;
        }
        h2{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1 class="display-1 text-center">Pagina de Temas</h1>
            <p class="lead text-center">Aqui estou listando uma imagem um titulo e um email diretamente do banco de dados</p
        </div>
        <br>
        <div>
            @foreach ($themes as $theme)

            <h4 class="text-danger">{{ $theme->name }}</h4>
            <hr>
            <p class="lead">{{ $theme->email }}</p>
            <img src="{{Voyager::image($theme->image)}}" alt="" class="img-fluid img-thumbnail img-rounded">

            <button class="btn btn-primary btn-lg d-block mx-auto my-3">Ver mais</button>
            @endforeach
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</html>
