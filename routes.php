<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/routes.css">
    <title>Agendamento - GVTT Transportadora</title>
</head>

<body>
    <?php 
        include "header.php";
    ?>
    <div id="principal">
        <h1>Opções</h1>
    </div>
    <div id="choices">
        <div class="choice-card" onclick="location.href='intranet.php';" style="cursor: pointer;">
            <h1>Ver usuários cadastrados</h1>
            <img src="images/person_icon.png">
            
        </div>

        <div class="choice-card" onclick="location.href='intranet.php';" style="cursor: pointer;">
            <h1>Realizar cadastros</h1>
            <img src="images/cadastro_icon.png">
        </div>

        <div class="choice-card">
            <h1>Realizar agendamento</h1>
            <img src="images/caminhao_icon.png">
        </div>
    </div>
    
    <?php 
        include "footer.php";
    ?>

</body>
</html>