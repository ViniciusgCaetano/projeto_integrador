<?php
    require_once 'php/cadastre_itens.php';
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon.png">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/cadastre_itens.css">
    <title>Agendamento - GVTT Transportadora</title>
</head>

<body>
    <?php 
        include "header.php";
    ?>
    <div id="principal">
        <h1>Cadastros</h1>
    </div>
    <div id="forms">
    
        <div class=center>
            <h1>Cadastrar Funcionário</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="Nome">Nome</label>
                <input name="Nome" placeholder="Digite o nome completo aqui"><br>

                <label for="cpf">CPF</label>
                <input name="cpf" placeholder="Digite o CPF aqui"><br>

                <label for="Data">Data de Nascimento</label>
                <input name="Data" type="date">

                <label for="Sexo">Sexo</label>
                <select name="Sexo">
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
                <div id="buttons">
                    <input name= "btn-funcionario" type="submit" id="cadastre-submit" value="Criar Usuário">    
                </div>
            </form>
        </div>
    

    
        <div class=center>
        <h1>Cadastrar Caminhão</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="Modelo">Modelo</label>
                <input name="Modelo" placeholder="Digite o modelo aqui"><br>

                <label for="Placa">Placa</label>
                <input name="Placa" placeholder="Digite a placa aqui"><br>

                <label for="Marca">Marca</label>
                <input name="Marca" placeholder="Digite a marca aqui"><br>

                <label for="Data">Data de aquisição</label>
                <input name="Data" type="date">

                <div id="buttons">
                    <input name= "btn-caminhao" type="submit" id="cadastre-submit" value="Criar Caminhão">    
                </div>
            </form>
        </div>    
    

    
        <div class=center>
            <h1>Cadastrar Rota</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <label for="Rota">Nome da rota</label>
                <input name="Rota" placeholder="Digite o nome da rota aqui"><br>

                <label for="Saida">Saída</label>
                <input name="Saida" placeholder="Digite o nome completo aqui"><br>

                <label for="Destino">Destino</label>
                <input name="Destino" placeholder="Digite o usuário aqui"><br>

                <label for="obs">Observações</label>
                <input name="obs" type="text-area">

                <div id="buttons">
                    <input name= "btn-rota" type="submit" id="cadastre-submit" value="Cadastrar Rota">    
                </div>
            </form>
        </div>
    </div>
    

    <?php 
        include "footer.php";
    ?>
</div>

    

</body>
</html>