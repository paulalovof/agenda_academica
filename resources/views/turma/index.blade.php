<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Turmas</title>
</head>
<body>

    <h1>Turmas</h1>
    
    <table class = "table d-flex justify-content-center">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ano</th>
            <th>Sigla</th>
            <th>Nível</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($turmas as $turma) { ?>
            <tr>
                <td>{{$turma->id}}</td>
                <td>{{$turma->nome}}</td>
                <td>{{$turma->ano}}</td>
                <td>{{$turma->sigla}}</td>
                <td>{{ $turma->nivel->nome }}</td>
                <td>
                    <div class="d-flex gap-2">
                        <span>
                            <a href="{{route('turma.show', $turma->id)}}" type="button" class="btn btn-secondary">Detalhes</a>
                        </span>

                        <span>
                            <a href="{{route('turma.edit', $turma->id)}}" type="button" class="btn btn-secondary">Editar</a>
                        </span>

                        <span>
                            <form method="POST" action="{{route('turma.destroy', $turma->id)}}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" value="Remover" class="btn btn-secondary">Excluir</button> 
                            </form>
                        </span>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
    <div class="d-flex justify-content-center">     
        <a href="{{route('turma.create')}}" type="button" class="btn btn-primary" >Cadastrar nova turma</a>
    </div>
</body>
</html>