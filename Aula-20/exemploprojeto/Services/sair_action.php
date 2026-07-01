
<?php

    session_start();

    if($_SESSION['logado'] == TRUE){
    
        /*Encerra a sessão e manda o usuario de volta para a tela de login*/
        session_destroy();
        header("Location: ../../index.php");

    }else{

        session_destroy();
        header("Location: ../../index.php");

    }

?>