<?php

    require "../Controller/Action_SQL.php";

    if (!isset($_GET['id']) || trim($_GET['id']) == "") {
        echo "<script> alert('Filme inválido'); window.location.href='../View/home.php'; </script>";
        exit;
    }

    $id = $_GET['id'];

    $nova_delecao = new Action_SQL;
    $nova_delecao->deletarFilme($id);

?>
