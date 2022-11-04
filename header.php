<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/principal.css">
<header>
        <a href="index.php"><img src="images/name_logo.png"></a>
        <nav>
            <ul>
                <li>
                    <a href="#quem_somos">Quem Somos</a>
                </li>
                <li>
                    <a href="#contato">Contato</a>
                </li>
                <li>
                    <a href="#trabalhe_conosco">Trabalhe Conosco</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <?php
                    if(session_status() != PHP_SESSION_ACTIVE):
                        session_start();
                    endif;

                    if(isset($_SESSION['idUser'])):
                        require_once "php/connect.php";
                        $idCliente = $_SESSION['idUser'];
                        $sql= "SELECT nomCliente FROM clientes WHERE idCliente= '$idCliente'";
                        $resultado = mysqli_query($connect,$sql);
                        $arr = mysqli_fetch_array($resultado);
                        $name = $arr['nomCliente'];

                        if($_SESSION['logged'] == true):
                            echo "<li >
                                <div style='font-size: 12pt; display: inline-block;'>
                                    Logado Como 
                                    $name
                                <div>
                            </li>";
                        endif;
                    endif;
                ?>

            </ul>
        </nav>
</header>
<br/>