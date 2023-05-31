<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario</title>
</head>
<body>
    <form action="recuperar-dados.php" method="post">
        <label for="nome">NOME</label>
        <input type="text" name="nome" id="nome" placeholder="Digite o nome!">
        
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" placeholder="Coloque o email!">
        
        <label for="idade">IDADE</label>
        <input type="number" name="idade" id="iadade" placeholder="Digite sua idade!">
       
        <label for="hobbie">HOBBIE</label>
        <input type="text" name="hobbie" id="hobbie" placeholder="Esceeva seu hobbie!">
       
        <button type="submit">Enviar</button>
    </form>
</body>
</html>