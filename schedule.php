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
        <?php
            require_once 'php/login.php';
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="Usuário">Usuário</label>
            <input name="Usuário" placeholder="Digite o usuário aqui"><br>
            <label for="Senha">Senha</label>
            <input name="Senha" type="password" placeholder="Digite a senha">
            <div id="buttons">
                <input name='btn-entrar' type="submit" id="submit" value="Autenticar Usuário">
                <input type="submit" id="submit" value="Esqueceu a Senha?">
            </div>
            <p>Não possui cadastro? <a href="cadastre.php">Entre aqui!</a></p>
        </form>
    </div>

    <?php 
        include "footer.php";
    ?>

</body>
</html>