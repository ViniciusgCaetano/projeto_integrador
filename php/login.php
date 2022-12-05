<?php
    require_once 'connect.php';

    if(isset($_POST['btn-entrar'])):
        $login = mysqli_escape_string($connect, $_POST['Usuário']);
        $senha = mysqli_escape_string($connect, $_POST['Senha']);
        $senha = md5($senha);


        $sql= "SELECT idCliente, nomCliente FROM clientes WHERE userCliente= '$login' AND senhaCliente='$senha'";
		
		$resultado = mysqli_query($connect,$sql);
        
        if(mysqli_num_rows($resultado) > 0):
            include "logged_success.php";

            $arr = mysqli_fetch_array($resultado);
            $_SESSION['logged'] = true;
            $_SESSION['idUser'] = $arr['idCliente'];
            $id = $_SESSION['idUser'];
            header("refresh:1;url=http://localhost");
        else:
            $_SESSION['logged'] = false;
            include "error.php";
            header("refresh:1;url=http://localhost/login.php");  
        endif;
    endif;
?>