<?php

    require "exemploprojeto/Conexao/Conexao.php";

    session_start();
    if(isset($_POST['enviar'])){

        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //Validação de campos em branco(empty) e espaços(trim)
        if(empty(trim($usuario))){

            echo "<script> alert('Campo Usuário em branco'); window.location.href='index.php'; </script>";
            exit;

        }
        if(empty(trim($senha))){

            echo "<script> alert('Campo Senha em branco'); window.location.href='index.php'; </script>";
            exit;

        }


        //Conecta com o banco e seleciona as informações certas
        $nova_conexao = new Conexao;

        $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(":email", $usuario);
        $stmt->execute(); 

        $resultado = $stmt;

        if(!$resultado){

            echo "<script> alert('Foi impossivel de selecionar'); window.location.href='index.php'; </script>";

        }

        //Entrega valores traduzidos para a variavel comparar
        $comparar = $stmt->fetch(PDO::FETCH_ASSOC);


        //Verificar e logar o usuario
        if($usuario == $comparar['email'] && $senha == $comparar['senha']){

            //Inicio a sessão de logado e enviou para a tela de login
            $_SESSION['logado'] = TRUE;
            header("Location: exemploProjeto/View/home.php");

        }else{

            echo "<script> alert('Usuario ou senha incorretos'); window.location.href='index.php'; </script>";

        }

        

    }


?>


<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aula 11</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">


        <div class="row" style="margin-top: 3%">

          <h1 style="text-align: center; margin-top: 10%">Tela de login</h1>

        </div>

        <form action="" method="post">

        <div class="row" style="margin-top: 3%">

          <div class="col-md-12">

            <label class="form-label">Usuario</label>
            <input type="text" class="form-control" placeholder="Usuario" name="usuario">

          </div>

        </div>

        <div class="row" style="margin-top: 3%" 3%>

          <div class="col-md-12">

            <label class="form-label">Senha</label>
            <input type="password" class="form-control" placeholder="Senha" name="senha">

          </div>
          
        </div>

        <div class="row">

          <div class="col-md-12">

            <button class="btn btn-primary" style="width: 100%; background-color: red; margin-top: 3%;" name="enviar">Logar</button>

          </div>
          
        </div>

        </form>

        

        
    </div>
























    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>