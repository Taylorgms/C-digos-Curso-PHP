<?php 

require "../Controller/Action_SQl.php";

$nova_delecao = new Action_SQL;

$id = $_GET['id'];

$nova_delecao->deletar($id);

?> 