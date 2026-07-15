<?php

    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";

    $editar_filme = new Filmes;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $id = $_POST['id'];
        $titulo = trim($_POST['titulo']);
        $ano = trim($_POST['ano']);
        $genero = trim($_POST['genero']);
        $classificacao_indicativa = trim($_POST['classificacao_indicativa']);
        $diretor = trim($_POST['diretor']);
        $sinopse = trim($_POST['sinopse']);
        $status = trim($_POST['status']);
        $pessoa_alugante = trim($_POST['pessoa_alugante']);

        if(empty($titulo)){
            echo "<script> alert('Campo título em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($ano)){
            echo "<script> alert('Campo ano em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($genero)){
            echo "<script> alert('Campo gênero em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($classificacao_indicativa)){
            echo "<script> alert('Campo classificação indicativa em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($diretor)){
            echo "<script> alert('Campo diretor em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($sinopse)){
            echo "<script> alert('Campo sinopse em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(empty($status)){
            echo "<script> alert('Campo status em branco');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        if(strtolower($status) === "alugado" && empty($pessoa_alugante)){
            echo "<script> alert('Informe quem alugou o filme');
            window.location.href='../View/editar_filme.php?id=$id'; </script>";
            exit;
        }

        $editar_filme->settitulo($titulo);
        $editar_filme->setano($ano);
        $editar_filme->setgenero($genero);
        $editar_filme->setclassificacao_indicativa($classificacao_indicativa);
        $editar_filme->setdiretor($diretor);
        $editar_filme->setsinopse($sinopse);
        $editar_filme->setpessoa_alugante($pessoa_alugante);
        $editar_filme->setstatus($status);

        $nova_edicao->editarFilme(
            $id,
            $editar_filme->gettitulo(),
            $editar_filme->getano(),
            $editar_filme->getgenero(),
            $editar_filme->getclassificacao_indicativa(),
            $editar_filme->getdiretor(),
            $editar_filme->getsinopse(),
            $editar_filme->getpessoa_alugante(),
            $editar_filme->getstatus()
        );
    }
?>
