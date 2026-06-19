<?php
    
    //Chama a classe para dentro do codigo
    require "conexao.php";

    if(isset($_POST['btn'])){

        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if(empty(trim($nome))){

            echo "<script> alert('Campo nome em branco');window.location.href='inserir.php'; </script>";
            exit;

        }

        if(empty(trim($idade))){

            echo "<script> alert('Campo idade em branco');window.location.href='inserir.php'; </script>";
            exit;

        }

        $stmt = $pdo->prepare("INSERT INTO pessoa (nome, idade) VALUES (:nome, :idade)");
        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":idade", $idade);
        $stmt->execute();


    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>

    <form action="" method="post">
        <label>Nome</label>
        <input type="text" name="nome">

        <br>

        <label>Idade</label>
        <input type="text" name="idade">

        <br>

        <button name="btn" type="submit">Enviar</button>
    </form>
</body>
</html>