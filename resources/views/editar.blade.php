<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <center>
        <h1>Resultados:</h1>
        <p>ID: <input type="text" name="id" value="{{$pessoa->id}}" disabled> </p>
        <hr>
        <form action="/editar-pessoa/{{$pessoa->id}}" method="post">
            @csrf
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" value="{{$pessoa->nome}}" >
            <br><br>
            <label for="lblIdade">Idade:</label>
            <input type="text" name="idade" value="{{$pessoa->idade}}" >
            <br><br>
            <button>Pronto</button>
        </form>
        <br><br>
        <a href="/inicio">Voltar</a>
    </center>
</body>
</html>