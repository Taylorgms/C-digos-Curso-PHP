<?php

require "Sistema/Conexao/Conexao.php";

session_start();

if (isset($_POST['enviar'])) {

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']);

    // Validação de campos
    if (empty($email)) {
        echo "<script>alert('Campo Email em branco'); window.location.href='index.php';</script>";
        exit;
    }

    if (empty($senha)) {
        echo "<script>alert('Campo Senha em branco'); window.location.href='index.php';</script>";
        exit;
    }

    $nova_conexao = new Conexao;

    $stmt = $nova_conexao->conectar_banco()->prepare("SELECT * FROM usuarios WHERE email = :email");
    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $comparar = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($comparar && password_verify($senha, $comparar['senha'])) {

        $_SESSION['logado'] = true;
        $_SESSION['usuario_id'] = $comparar['id'];
        $_SESSION['usuario_nome'] = $comparar['nome'];

        header("Location: Sistema/View/home.php");
        exit;

    } else {

        echo "<script>alert('Usuário ou senha incorretos'); window.location.href='index.php';</script>";
        exit;
    }
}

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>

    <link rel="stylesheet" href="estilo.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">

    <div class="row" style="margin-top:3%;">
        <h1 style="text-align:center; margin-top:10%;">Tela de Login</h1>
    </div>

    <form action="" method="post">

        <div class="row" style="margin-top:3%;">
            <div class="col-md-12">

                <label class="form-label">Email</label>

                <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                    name="email"
                >

            </div>
        </div>

        <div class="row" style="margin-top:3%;">
            <div class="col-md-12">

                <label class="form-label">Senha</label>

                <input
                    type="password"
                    class="form-control"
                    placeholder="Senha"
                    name="senha"
                >

            </div>
        </div>

        <div class="row">

            <div class="col-md-12">

                <button
                    class="btn btn-primary"
                    style="width:100%; background-color:red; margin-top:3%;"
                    name="enviar"
                >
                    Logar
                </button>

            </div>

        </div>

        <div class="row" style="margin-top:3%;">
            <div class="col-md-12" style="text-align:center;">
                <a href="Sistema/View/cadastrar_usuario.php">Ainda não tem conta? Cadastre-se</a>
            </div>
        </div>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
