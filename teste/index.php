
<?php
//sessao dentro do php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE</title>
</head>

<body>
    <h1>CADASTRAR USUÁRIO</h1>
    <?php
    if(isset( $_SESSION['msg']))
    {
            echo  $_SESSION['msg'];
         /*imprimir uma vez*/   unset( $_SESSION['msg']);
    }
    ?>
    
    <form method="POST" action="processa.php">
        <label>Nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
   
        <label>E-mail:</label>
        <input type="text" name="email" placeholder="Digite o email"><br><br>
    
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

