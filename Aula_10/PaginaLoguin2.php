<?php

if (isset($_POST["btn"])) {

    $nome = $_POST["nome"] ?? '';
    $cpf = $_POST["cpf"] ?? '';
    $sexo = $_POST["sexo"] ?? '';
    $estadoCivil = $_POST["estadoCivil"] ?? '';
    $renda = $_POST["renda"] ?? '';
    $data = $_POST["data"] ?? '';

    echo "Nome: " . $nome . "<br>
            CPF: " . $cpf . "<br>
            Sexo: " . $sexo . "<br>
            EstadoCivil: " . $estadoCivil . "<br>
            Renda: " . $renda . "<br>
            Data: " . $data ;

    if (empty($nome)) {
        echo "<script>
        alert('Campo nome em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }

    if (empty(trim($cpf))) {
        echo "<script>
        alert('Campo CPF em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }

    if (empty($sexo)) {
        echo "<script>
        alert('Campo sexo em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }

    if (empty($estadoCivil)) {
        echo "<script>
        alert('Campo Estado Civil em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }

    if (empty(trim($renda))) {
        echo "<script>
        alert('Campo Renda em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }

    if (empty($data)) {
        echo "<script>
        alert('Campo Data em branco');
        window.location.href='PaginaLoguin2.php';
        </script>";
        exit;
    }
}

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Aula 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div>
    <h1 class="text-center"><br>Cadastro do Cliente</h1>
</div>

<div class="col-md-4">
    <h2 class="text-center">Dados Pessoais<br></h2>
</div>

<div class="container">

<form method="post" action="" autocomplete="off">

    <div class="row">
        <div class="col-md-12 mb-3">
            <label class="form-label">Nome do Usuário</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome aqui">
        </div>
    </div>

    <div class="row">

        <div class="col-md-4 mb-3">
            <label class="form-label">CPF</label>
            <input type="number" name="cpf" class="form-control" placeholder="000.000.000-00">
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" name="data">
        </div>

        <div class="col-md-4 mb-3">
            <label class="form-label">Sexo</label><br>

            <label>
                <input type="radio" name="sexo" value="masculino">
                Masculino
            </label>

            <label>
                <input type="radio" name="sexo" value="feminino">
                Feminino
            </label>

        </div>

    </div>

    <div class="row">

        <div class="col-md-6 mb-3">
            <label class="form-label">Estado Civil:</label>
            <select name="estadoCivil" class="form-select">
                <option value="" disabled selected>Selecione</option>
                <option value="solteiro">Solteiro</option>
                <option value="namorando">Namorando</option>
                <option value="casado">Casado</option>
                <option value="divorciado">Divorciado</option>
            </select>
        </div>

        <div class="col-md-6 mb-3">
            <label class="form-label">Renda:</label>
            <input type="text" class="form-control" placeholder="0,00" name="renda">
        </div>

    </div>

    <div class="row">
        <button name="btn" type="submit" class="btn btn-danger w-100">
            Enviar
        </button>
    </div>

</form>

</div>

</body>
</html>