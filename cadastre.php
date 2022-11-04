<?php
    require_once 'php/cadastre.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/background.css">
    <title>Login - GVTT Transportadora</title>
</head>


<body>
    <?php 
        include "header.php";
    ?>
    <div class=center>
        <a href="index.php"><img src="images/logo.png"></a>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
            <label for="Nome">Nome</label>
            <input name="Nome" placeholder="Digite o nome completo aqui"><br>

            <label for="Usuário">Usuário</label>
            <input name="Usuário" placeholder="Digite o usuário aqui"><br>

            <label for="Data">Data de Nascimento</label>
            <input name="Data" type="date">

            <label for="Email">E-mail</label>
            <input name="Email" type="email" placeholder="Digite o e-mail">

            <label for="Senha">Senha</label>
            <input name="Senha" type="password" placeholder="Digite a senha">

            <label for="Senha_r">Repita a senha</label>
            <input name="Senha_r" type="password" placeholder="Repita a senha">

            <div id="buttons">
                <input name= "btn-entrar" type="submit" id="cadastre-submit" value="Criar Usuário">    
            </div>
            <p>Já possui login na plataforma? <a href="login.php">Entre aqui!</a></p>
        </form>

        
    </div>

    <?php 
        include "footer.php";
    ?>

</body>
</html>