<?php 

if(isset($_POST["btn"])){

    $nome = $_POST["nome"] ;
    $cpf = $_POST["cpf"] ;
    $endereço = $_POST["endereço"] ;
    $nivel = $_POST["nivel"] ;
    $email = $_POST["email"] ;
    $senha = $_POST["senha"] ;
    $status = $_POST["status"] ;

            echo "Nome: " . $nome . "<br>
            CPF: " . $cpf . "<br>
            Endereço: " . $endereço . "<br>
            Nivel: " . $nivel . "<br>
            Email: " . $email . "<br>
            Senha: " . $senha . "<br>
            Status: " . $status;

    if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }
    if(empty(trim($cpf))){
      echo "<script> alert('Campo cpf em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }

    if(empty(trim($endereço))){
      echo "<script> alert('Campo endereço em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }
    if(empty(trim($nivel))){
      echo "<script> alert('Campo nivel em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }
    if(empty(trim($email))){
      echo "<script> alert('Campo email em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }
    if(empty(trim($senha))){
      echo "<script> alert('Campo senha em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
       exit;
    }
     if(empty(trim($status))){
      echo "<script> alert('Campo status em branco');
       window.location.href='PaginaLoguin1.php'; </script>";
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
    
        <div class="col-md-4">
            <h1 class="text-center"><br>Novo Usuário</h1>
        </div>
    

    <div class="container">

        <form method="post" action="" autocomplete="off">

        <div class="row">

            <div class="col-md-12 mb-3">
                <label class="form-label">Nome do Usuário</label>

                <input 
                type="text"
                name="nome"
                class="form-control"
                placeholder="Digite seu nome aqui">
            </div>

        </div>

        <div class="row">
            
    <div class="col-md-4 mb-3">
        <label class="form-label">CPF</label>

        <input 
        type="number"
        name="cpf"
        class="form-control"
        placeholder="informe seu CPF">
    </div>
           
    <div class="col-md-4 mb-3">
        <label class="form-label">Endereço</label>

        <input 
        type="text"
        name="endereço"
        class="form-control"
        placeholder="informe seu endereço">
    </div>

    <div class="col-md-2 mb-3">
        <label for="nivel" class="form-label">Nível</label>

        <select id="nivel" name="nivel" class="form-select">
            <option value="" disabled selected>Nível</option>
            <option value="1">Admin</option>
            <option value="2">Cliente</option>
            <option value="3">Usuario</option>
            <option value="4">Visitante</option>
        </select>
    </div>

</div>

<div class="row">

    <div class="col-md-4 mb-3">
        <label class="form-label">Email</label>

        <input 
        type="text"
        name="email"
        class="form-control"
        placeholder="informe seu email">
    </div>
            
    <div class="col-md-4 mb-3">
        <label class="form-label">Senha</label>

        <input 
        type="password"
        name="senha"
        class="form-control"
        placeholder="informe sua senha">
    </div>
        <div class="col-md-4 mb-3">
                <label for="nivel" class="form-label">Status</label>

                <select name="status" class="form-select">
                    <option value="" disabled selected>Status</option>
                    <option value="1">Ativado</option>
                    <option value="2">Desativado</option>
                </select>
            </div>
</div> 
      
      
        <div> 
            <button type="submit" name="btn" style="margin-top:0.5%;">Enviar</button>

<button type="reset" name="btnC" >Cancelar</button>
        </div>

  </form>
  
    </div>

    
</body>
</html>