<?php
    require_once "connect.php";

    if(isset($_POST['btn-funcionario'])):
        $nome=filter_var($_POST['Nome'], FILTER_SANITIZE_STRING);
        $cpf=filter_var($_POST['cpf'], FILTER_SANITIZE_STRING);
        $dataDeNascimento = $_POST['Data'];
        $sexo = filter_var($_POST['Sexo'], FILTER_SANITIZE_STRING);
        echo "$sexo, $dataDeNascimento, $cpf, $nome";
        $sql= "INSERT INTO `funcionarios` (`nomeFuncionario`, `cpfFuncionario`, `dataNascFuncionario`, `sexoFuncionario`) VALUES ('$nome', '$cpf', '$dataDeNascimento', '$sexo')";
        echo "$sql";
        mysqli_query($connect,$sql);
    endif;

    if(isset($_POST['btn-caminhao'])):
        $modelo = filter_var($_POST['Modelo'], FILTER_SANITIZE_STRING);
        $placa = filter_var($_POST['Placa'], FILTER_SANITIZE_STRING);
        $marca = filter_var($_POST['Marca'], FILTER_SANITIZE_STRING);
        $dataAqs = $_POST['Data'];
        $sql= "INSERT INTO `caminhao`(`placaCaminhao`, `modeloCaminhao`, `marcaCaminhao`, `dataAquisicaoCaminhao`) VALUES ('$placa','$modelo','$marca','$dataAqs')";
        mysqli_query($connect,$sql);
    endif;

    if(isset($_POST['btn-rota'])):
        $nome_rota =filter_var($_POST['Rota'], FILTER_SANITIZE_STRING);
        $saida=filter_var($_POST['Saida'], FILTER_SANITIZE_STRING);
        $destino = filter_var($_POST['Destino'], FILTER_SANITIZE_STRING);
        $observacoes = filter_var($_POST['obs'], FILTER_SANITIZE_STRING);
        $sql= "INSERT INTO `rotas`(`nomeRota`, `saidaRota`, `destinoRota`,  `observacaoRota`) VALUES ('$nome_rota','$saida',' $destino','$observacoes')";
        mysqli_query($connect,$sql);
    endif;
?>