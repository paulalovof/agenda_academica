<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Nova Turma</title>
</head>
<body>

    <h1>Nova Turma</h1>
    
    <div>
        <form action="{{route('turma.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <p>Nome:</p>
                <input type="text" name="nome" class="sm:rounded-lg"><br>
            </div>

            <div class="">
                <p>Ano:</p>
                <input type="text" name="ano" class="sm:rounded-lg"><br>
            </div>
            
            <div class="">
                <p>Sigla:</p>
                <input type="text" name="sigla" class="sm:rounded-lg"><br>
            </div>

            <div class="mb-3">
                <label for="nivel" class="form-label">Nivel:</label>
                <select name="nivel_id" class="form-control" id="nivel" required>
                    <option value="">Selecione o Nível</option>
                    @foreach($nivels as $nivel)
                        <option value="{{ $nivel->id }}">{{ $nivel->nome }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>