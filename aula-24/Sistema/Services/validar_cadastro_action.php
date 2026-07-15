
<?php

    require "../Model/Regioes.php";
    require "../Controller/Action_SQL.php";

    $nova_regiao = new Regioes;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $PEC = $_POST['PEC'];
        $PEC_valor = $_POST['PEC_valor'];

        if(empty(trim($PEC_valor))){

            echo "<script> alert('Campo em branco');window.location.href='../View/" . $PEC . ".php'; </script>";
            exit;

        }

        $nova_regiao->setPEC($PEC_valor);

    }
    
    if(isset($_POST['enviar2'])){

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

        $nova_regiao->setPais($pais);
        $nova_regiao->setEstado($estado);
        $nova_regiao->setCidade($cidade);
        

    }

    if($nova_regiao->getPEC() != ""){

            $nova_insercao->inserir(
                $PEC,
                $nova_regiao->getPEC()
            );

       }else if(
        $nova_regiao->getPais() != "" &&
        $nova_regiao->getEstado() != "" &&
        $nova_regiao->getCidade() != ""){

            $nova_insercao->inserir_JOIN(
                $nova_regiao->getPais(),
                $nova_regiao->getEstado(),
                $nova_regiao->getCidade()
            );

        }

?>