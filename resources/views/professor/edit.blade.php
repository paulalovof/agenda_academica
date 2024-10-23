<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <title>Editar Professor</title>
</head>
<body>
    <h1>Editar Professor</h1>

    <div class="">
        <form action="{{route('professor.update', $professor->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="p-2">
                <p>Nome:</p>
                <input type="text" name="nome" class="sm:rounded-lg" value="{{$professor->nome}}"><br>
            </div>
    
            <div class="pt-5">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>