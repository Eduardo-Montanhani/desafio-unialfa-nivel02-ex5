<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    
    <form action="recuperar-dados.php" method="post">
        <label for="nome" class="form-label">NOME</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome!">
        
        <label for="email" class="form-label">EMAIL</label>
        <input type="email" name="email" id="email" placeholder="Coloque o email!">
        
        <label for="idade" class="form-label">IDADE</label>
        <input type="number" name="idade" id="iadade" placeholder="Digite sua idade!">
       
        <label for="hobbie" class="form-label">HOBBIE</label>
        <textarea  type="text" name="hobbie" id="hobbie" placeholder="Digite sua mensagem"></textarea>
       
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>