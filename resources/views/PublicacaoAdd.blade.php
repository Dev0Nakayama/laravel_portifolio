<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">
    <title>Document</title>
</head>

<body>

    <nav>
        <label class="label_nav">Adicionar publicação</label>
    </nav>


    <form method="POST" action="{{ route('Store') }}" enctype="multipart/form-data">
    @csrf
        <div>
            <br>
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome">
            <br>
            <label for="nome">Image:</label>
            <input type="file" id="image" name="image">
            <img src="" alt="">
            <br>
            <label>Descrição:</label>
            <br>
            <textarea type="text" id="descricao" rows="5" cols="50" name="descricao"></textarea>
            <br>
            <button type="submit">Salva Postagem</button>
        </div>
    </form>
</body>

</html>