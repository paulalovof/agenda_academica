<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Detalhamento da Turma</title>
</head>
<body>
    <h1>Detalhamento da Turma</h1>

    <div class="">
        <ul>
            <li class=""><b>ID:</b> {{$turma->id}}</li>
            <li class=""><b>NOME:</b> {{$turma->nome}}</li>
            <li class=""><b>ANO:</b> {{$turma->ano}}</li>
            <li class=""><b>SIGLA:</b> {{$turma->sigla}}</li>
            <li class=""><b>NÍVEL:</b> {{$turma->nivel->nome}}</li>
            <li class=""><b>CRIACAO:</b> {{$turma->created_at}}</li>
            <li class=""><b>ALTERACAO:</b> {{$turma->updated_at}}</li>
        </ul>
    </div>
</body>
</html>