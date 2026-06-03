<?php 
    session_start();

    if($_SESSION['logado'] == TRUE){

        session_destroy(); /* encerra a sessão e manda o usuario de volta para a tala de loguin */
        header("Location: index.php");
    }
    else{

        session_destroy(); /* encerra a sessão e manda o usuario de volta para a tala de loguin */
        header("Location: index.php");

    }
?>