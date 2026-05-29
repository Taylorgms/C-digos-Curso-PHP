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
       window.location.href='Loguin.php'; </script>";
       exit;
    }
    if(empty(trim($cpf))){
      echo "<script> alert('Campo cpf em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }

    if(empty(trim($endereço))){
      echo "<script> alert('Campo endereço em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }
    if(empty(trim($nivel))){
      echo "<script> alert('Campo nivel em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }
    if(empty(trim($email))){
      echo "<script> alert('Campo email em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }
    if(empty(trim($senha))){
      echo "<script> alert('Campo senha em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }
     if(empty(trim($status))){
      echo "<script> alert('Campo status em branco');
       window.location.href='Loguin.php'; </script>";
       exit;
    }
    
}



?>
