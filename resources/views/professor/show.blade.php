<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Detalhamento do Professor</title>
</head>
<body>
    <h1>Detalhamento do Professor</h1>

    <div class="">
        <ul>
            <li class=""><b>ID:</b> {{$professor->id}}</li>
            <li class=""><b>NOME:</b> {{$professor->nome}}</li>
            <li class=""><b>CRIACAO:</b> {{$professor->created_at}}</li>
            <li class=""><b>ALTERACAO:</b> {{$professor->updated_at}}</li>
        </ul>
    </div>
</body>
</html>