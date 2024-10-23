<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Alunos</title>
</head>
<body>

    <h1>Alunos</h1>
    <table class = "table d-flex justify-content-center">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Turma</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($alunos as $aluno) { ?>
            <tr>
                <td>{{$aluno->id}}</td>
                <td>{{$aluno->nome}}</td>
                <td>{{$aluno->turma->nome}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <span>
                            <a href="{{route('aluno.show', $aluno->id)}}" type="button" class="btn btn-secondary">Detalhes</a>
                        </span>

                        <span>
                            <a href="{{route('aluno.edit', $aluno->id)}}" type="button" class="btn btn-secondary">Editar</a>
                        </span>

                        <span>
                            <form method="POST" action="{{route('aluno.destroy', $aluno->id)}}">
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
        <a href="{{route('aluno.create')}}" type="button" class="btn btn-primary" >Cadastrar novo Aluno</a>
    </div>
</body>
</html>