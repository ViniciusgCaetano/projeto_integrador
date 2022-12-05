<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/principal.css">
<header>
        <a href="index.php"><img src="images/name_logo.png" tile="opa"></a>
        <nav>
            <ul>
                <li>
                    <a href="index.php#quem_somos">Quem Somos</a>
                </li>
                <li>
                    <a href="index.php#contato">Contato</a>
                </li>
                <li>
                    <a href="index.php#trabalhe_conosco">Trabalhe Conosco</a>
                </li>
                <?php
                    if(session_status() != PHP_SESSION_ACTIVE):
                        session_start();
                    endif;

                    if(isset($_SESSION['logged'])):
                        if($_SESSION['logged'] == true):
                            echo "
                            <li>
                                <a href='intranet.php'>Intranet</a>
                            </li>
                            <li>
                                <a href='routes.php'>Agendar</a>
                            </li>
                            ";
                        else:
                            echo "
                            <li>
                                <a href='login.php'>Login</a>
                            </li>
                                ";     
                        endif;
                    else:
                        echo "
                        <li>
                            <a href='login.php'>Login</a>
                        </li>
                            ";
                    endif     
    
                ?>

            </ul>
        
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
                    echo "
                        
                        <a href='logout.php' style='display: contents;'><img style='width:4% !important; height:4% !important;' src='images/usericon.png' title='Logado como $name.\nAperte no ícone para fazer logout' ></a>
                        
                    ";
                endif;
            endif;
        ?>
        </nav>

            
        
</header>
<br/>