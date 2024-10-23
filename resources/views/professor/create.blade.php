<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <title>Novo Professor</title>
</head>
<body>

    <h1>Novo Professor</h1>
    
    <div>
        <form action="{{route('professor.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="">
                <p>Nome:</p>
                <input type="text" name="nome" class="sm:rounded-lg"><br>
            </div>
            
            <div class="">
                <input type="submit">
            </div>
        </form>
    </div>
</body>
</html>