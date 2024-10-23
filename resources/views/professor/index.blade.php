<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Professores</title>
</head>
<body>

    <h1>Professores</h1>
    <table class = "table d-flex justify-content-center">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($professors as $professor) { ?>
            <tr>
                <td>{{$professor->id}}</td>
                <td>{{$professor->nome}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <span>
                            <a href="{{route('professor.show', $professor->id)}}" type="button" class="btn btn-secondary">Detalhes</a>
                        </span>

                        <span>
                            <a href="{{route('professor.edit', $professor->id)}}" type="button" class="btn btn-secondary">Editar</a>
                        </span>

                        <span>
                            <form method="POST" action="{{route('professor.destroy', $professor->id)}}">
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
        <a href="{{route('professor.create')}}" type="button" class="btn btn-primary" >Cadastrar novo Professor</a>
    </div>
</body>
</html>