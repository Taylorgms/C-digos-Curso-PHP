<?php 

if(isset($_POST["btn"])){

    $nome = $_POST["nome"] ;
    $senha = $_POST["senha"] ;
    $genero = $_POST["gnr"] ;
    $numero = $_POST["num"] ;
    echo "Nome: " . $nome . "<br>" . "Senha: " . $senha . "<br>" . "Genero: " . $genero . "<br>" . "Número: " . $numero ;

    if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href=index.php; </script>";
       exit;
    }
    if(empty(trim($senha))){
      echo "<script> alert('Campo senha em branco');
       window.location.href=index.php; </script>";
       exit;
    }

    if(empty(trim($genero))){
      echo "<script> alert('Campo genero em branco');
       window.location.href=index.php; </script>";
       exit;
    }
    if(empty(trim($numero))){
      echo "<script> alert('Campo numero em branco');
       window.location.href=index.php; </script>";
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
                type="password"
                name="cpf"
                class="form-control"
                placeholder="000.000.000-00">

            </div>
           
           <div class="col-md-4 mb-3">
                
                <label class="form-label">Data de nascimento </label>
                <input type="date" class="form-control" name="data_nascimento">
           
            </div>

            <div class="col-md-4 mb-3">

            <label class="form-label"> Sexo </label> <br>

            <label>
                <input type="radio" name="sexof" value="masculino">
                Masculino
            </label>

            <label>
                <input type="radio" name="sexom" value="feminino">
                Feminino
            </label>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Estado Civil:</label>

                <select name="estadoCivil" class="form-select">
                        <option value="solteiro">Solteiro</option>
                        <option value="casado">Namorando</option>
                        <option value="casado">Casado</option>                    <option value="divorciado">Divorciado</option>
                </select>
            </div>
            
            <div class="col-md-6 mb-3">

                <label class="form-label">Renda:</label>
                <input type="text" class="form-control" placeholder="0,00">

            </div>
        

      </div>
      
      
        <div class="row"> 
            <button 
                name="btn"
                type="submit"
                class="btn btn-danger w-100">
                Enviar
            </button>
        </div>

  </form>
  
    </div>

    
</body>
</html>