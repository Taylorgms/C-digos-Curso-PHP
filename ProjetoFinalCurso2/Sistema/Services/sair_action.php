<?php

    session_start();

    // Encerra a sessão e manda o usuário de volta para a tela de login
    $_SESSION = array();
    session_destroy();
    header("Location: ../../index.php");
    exit;

?>
