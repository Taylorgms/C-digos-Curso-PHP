<?php 

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL.php";

    $nova_regiao = new Regioes;
    $nova_insercao = new Action_SQL;
    if(isset($_POST['enviar'])){

    $PEC = $_POST['PEC'];
    $PEC_valor = $_POST['PEC_valor'];


    if(empty($PEC)){
      echo "<script> alert('Campo branco');
       window.location.href='../View/".$PEC.".php'; </script>";
       exit;}

        $nova_regiao->setPEC($PEC_valor);
        
    }
       if($nova_regiao->getPEC() !="" ){

        $nova_insercao->inserir(
            $PEC,
            $nova_regiao->getPEC());

        }
?>
