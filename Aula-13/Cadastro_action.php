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
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }

    if (empty(trim($cpf))) {
        echo "<script>
        alert('Campo CPF em branco');
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }

    if (empty($sexo)) {
        echo "<script>
        alert('Campo sexo em branco');
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }

    if (empty($estadoCivil)) {
        echo "<script>
        alert('Campo Estado Civil em branco');
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }

    if (empty(trim($renda))) {
        echo "<script>
        alert('Campo Renda em branco');
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }

    if (empty($data)) {
        echo "<script>
        alert('Campo Data em branco');
        window.location.href='Cadastro.php';
        </script>";
        exit;
    }
}
