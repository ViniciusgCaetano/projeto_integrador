<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/intranet.css">
    <title>Usuários Cadastrados - GVTT Transportadora</title>
</head>

<body>
    <?php 
        include "header.php";
    ?>

    <div>
    </div>
    <div id="principal">
        <h1>Lista de Usuários cadastrados</h1>

    </div>
    <?php
        require_once "php/connect.php";
  
        if(isset($_SESSION['idUser'])):
            $sql = "SELECT * FROM clientes";
            $result=mysqli_query($connect,$sql);

            echo '<div id="collectionsDiv">';
            
            while ($row=mysqli_fetch_assoc($result)) {
                echo "
                <div class='info_usuario'>
                    <h3 style='text-align: center'>{$row['nomCliente']}</h3>
                    <div class='displayer'>
                        <div>
                            <h5>Usuário: {$row['userCliente']}</h5>
                            <h5>Email: {$row['emailCliente']}</h5>
                            <h5>Data de nascimento: {$row['nascCliente']}</h5>
                        </div>
                        <div>
                            <img src='images/usericon.png' >
                        </div>
                    </div>
                </div>
                ";
            };
            
            echo '</div>';
        endif;
        
        
    ?>

    <?php 
        include "footer.php";
    ?>

</body>