<?php
    require_once "connect.php";

    if(isset($_POST['btn-entrar'])):
        $user=filter_var($_POST['Usuário'], FILTER_SANITIZE_STRING);
        $nome=filter_var($_POST['Nome'], FILTER_SANITIZE_STRING);
        $email=filter_var($_POST['Email'], FILTER_SANITIZE_EMAIL);
        $data = $_POST['Data'];
        $senha = mysqli_escape_string($connect, $_POST['Senha']);
        $senha_r = mysqli_escape_string($connect, $_POST['Senha_r']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL) == 0){
            echo "<script>
                    alert('E-mail Inválido');
                    location.href='cadastre.php';
                </script>";
        }
        elseif($senha == ""){
            echo "<script>
                    alert('Senha vazia!');
                    location.href='cadastre.php';
                </script>";
        }elseif($senha != $senha_r){
            echo "<script> 
                    alert('Senhas diferentes');
                    header('Refresh: 0; url=cadastre.php');
                </script>";
        }else{
            $senha = md5($senha);
            echo $data;
            $sql= "INSERT INTO clientes (idCliente, nomCliente, userCliente, nascCliente, senhaCliente, emailCliente, permCliente) VALUES (NULL, '$nome', '$user', '$data',  '$senha', '$email', 1)";

            echo "<script> 
                alert('Cadastrado, redirecionando para a página de Login...');
            </script>";
            mysqli_query($connect,$sql);
        }
    endif;
?>