
<?php

    require "../Controller/Action_SQL.php";

    $nova_delecao = new Action_SQL;

    $id = $_GET['id'];
    $PEC = $_GET['PEC'];

    if($PEC == "pais" ||
       $PEC == "estado" ||
       $PEC == "cidade"){

        $nova_delecao->deletar($PEC, $id);

    }else{

        $nova_delecao->deletar_JOIN($id);

    }
    
?>