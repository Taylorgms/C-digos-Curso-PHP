<?php 

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL.php";

    $editar_regiao = new Regioes;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

    $id = $_POST['id'];
    $PEC = $_POST['PEC'];
    $PEC_valor = $_POST['PEC_valor'];
    

   if(empty($PEC_valor)){
      echo "<script> alert('Campo branco');
       window.location.href='../View/".$PEC.".php'; </script>";
       exit;}

     
       
        $editar_regiao->setPEC($PEC_valor);
        

    }
       if($editar_regiao->getPEC() != "" ){

        $nova_edicao->editar(
            $id, 
            $PEC,
            $editar_regiao->getPEC()
        );
        }
?>
