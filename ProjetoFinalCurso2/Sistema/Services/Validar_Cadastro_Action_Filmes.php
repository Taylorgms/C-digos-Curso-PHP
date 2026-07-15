<?php

    require "../Model/Filmes.php";
    require "../Controller/Action_SQL.php";

    $novo_filme = new Filmes;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

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
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($ano)){
            echo "<script> alert('Campo ano em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($genero)){
            echo "<script> alert('Campo gênero em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($classificacao_indicativa)){
            echo "<script> alert('Campo classificação indicativa em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($diretor)){
            echo "<script> alert('Campo diretor em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($sinopse)){
            echo "<script> alert('Campo sinopse em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        if(empty($status)){
            echo "<script> alert('Campo status em branco');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        // Se o filme não estiver alugado, não faz sentido ter alguém alugando
        if(strtolower($status) === "alugado" && empty($pessoa_alugante)){
            echo "<script> alert('Informe quem alugou o filme');
            window.location.href='../View/cadastrar_filme.php'; </script>";
            exit;
        }

        $novo_filme->settitulo($titulo);
        $novo_filme->setano($ano);
        $novo_filme->setgenero($genero);
        $novo_filme->setclassificacao_indicativa($classificacao_indicativa);
        $novo_filme->setdiretor($diretor);
        $novo_filme->setsinopse($sinopse);
        $novo_filme->setpessoa_alugante($pessoa_alugante);
        $novo_filme->setstatus($status);

        $nova_insercao->inserirFilme(
            $novo_filme->gettitulo(),
            $novo_filme->getano(),
            $novo_filme->getgenero(),
            $novo_filme->getclassificacao_indicativa(),
            $novo_filme->getdiretor(),
            $novo_filme->getsinopse(),
            $novo_filme->getpessoa_alugante(),
            $novo_filme->getstatus()
        );
    }
?>
