<?php 
    session_start();
    if($_SESSION['logado'] == FALSE){

        echo "<script> alert('Por favor faça o Loguin');
       window.location.href='index.php'; </script>";
        exit;
    }

?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Eletronica builds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <?php require "topo.php"; ?>
<div>
   
    <h1 class="text-center"><br>Cadastro do Cliente</h1>
    
</div>

<div class="col-md-4">
    <h2 class="text-center">Dados Pessoais<br></h2>
</div>

<div class="container">

<form method="post" action="Cadastro_action.php" autocomplete="off"> <!--ELE MANDA PARA OQUE TIVER ACTION ACHAR-->

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
        <div class="col-md-6 mb-3">
            <a href="Loguin.php"  style="text-decoration: none; color:black">Ja tem uma conta? Clique aqui</a>
        </div>
</form>

</div>
<?php include("rodape.php"); ?>  
</body>
</html>