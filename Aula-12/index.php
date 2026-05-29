<?php 
session_start();

if(isset($_POST['btn'])){
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
     
    if (empty($usuario)) {
        echo "<script>
        alert('Campo Usuario em branco');
        window.location.href='index.php';
        </script>";
        exit;
    }
    if (empty($senha)) {
        echo "<script>
        alert('Campo Senha em branco');
        window.location.href='index.php';
        </script>";
        exit;
    }
    if($usuario == "Taylor" && $senha == "123a"){
    $_SESSION ['logado'] = TRUE;
    header("Location: home.php");
    }
    else{echo "<script> alert('Usuario ou Senha Incorretos');
        window.location.href='index.php'; </script>";}
}


?>
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Aula 11</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    

</head>

<body>   

    <div class="container">
<form action="" method="post">
        <div class="row">
            <h1 style="text-align: center; Margin-top:10%"> Tela de Loguin </h1>
        </div>
        
                <div class="row">
                    <div class="col-md-12" style="margin-top: 2%";>
                    <label class="form-label">Nome do Usuário</label>
                        <input 
                        type="text"
                        name="usuario"
                        class="form-control"
                        placeholder="Digite seu nome aqui">
                    </div>

                    <div class="col-md-12" style="margin-top: 2%";>
                    <label class="form-label">Senha</label>
                        <input 
                        type="password"
                        name="senha"
                        class="form-control"
                        placeholder="Digite sua Senha aqui">
                    </div>
                </div>

                    <div class="row" style="margin-top: 2%";>
                        <button name="btn" type="submit" class="btn btn-danger w-100">
                        Enviar
                        </button>
                    </div>
            </form>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    
</body>
</html>