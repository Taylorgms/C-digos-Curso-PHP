
<?php

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL.php";

    $editar_regiao = new Regioes;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $id = $_POST['id'];
        $PEC = $_POST['PEC'];
        $PEC_valor = $_POST['PEC_valor'];

        if(empty(trim($PEC_valor))){

            echo "<script> alert('Campo em branco');window.location.href='../View/" . $PEC . ".php'; </script>";
            exit;

        }


        $editar_regiao->setPEC($PEC_valor);

    }
    
    if(isset($_POST['enviar2'])){

        $id = $_POST['id'];
        $pais = $_POST['pais'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];

        if(empty(trim($pais))){

            echo "<script> alert('Campo pais em branco');window.location.href='../View/cadastro_JOIN.php'; </script>";
            exit;

        }
        if(empty(trim($estado))){

            echo "<script> alert('Campo estado em branco');window.location.href='../View/cadastro_JOIN.php'; </script>";
            exit;

        }
        if(empty(trim($cidade))){

            echo "<script> alert('Campo cidade em branco');window.location.href='../View/cadastro_JOIN.php'; </script>";
            exit;

        }

        $editar_regiao->setPais($pais);
        $editar_regiao->setEstado($estado);
        $editar_regiao->setCidade($cidade);
        

    }

    if($editar_regiao->getPEC() != ""){

            $nova_edicao->editar(
                $id,
                $PEC,
                $editar_regiao->getPEC()
            );

       }else if(
        $editar_regiao->getPais() != "" &&
        $editar_regiao->getEstado() != "" &&
        $editar_regiao->getCidade() != ""){

            $nova_edicao->editar_JOIN(
                $id,
                $editar_regiao->getPais(),
                $editar_regiao->getEstado(),
                $editar_regiao->getCidade()
            );

        }

?>