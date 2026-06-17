<?php

    require "Predios.php";

    $novo_predio = new Predios;

if(isset($_POST['btn'])){

$nome = $_POST['nome'];
$altura = $_POST['altura'];
$largura = $_POST['largura'];
$andar = $_POST['andar'];
$qtd_apt = $_POST['qtd_apt'];


 if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='predio.php'; </script>";
       exit;}

       if(empty($altura)){
      echo "<script> alert('Campo Altura em branco');
       window.location.href='predio.php'; </script>";
       exit;}

       if(empty($largura)){
      echo "<script> alert('Campo largura em branco');
       window.location.href='predio.php'; </script>";
       exit;}

       if(empty($andar)){
      echo "<script> alert('Campo andar em branco');
       window.location.href='predio.php'; </script>";
       exit;}

       if(empty($qtd_apt)){
      echo "<script> alert('qtd_apt);
       window.location.href='predio.php'; </script>";
       exit;}

       $novo_predio->setNome($nome);
        $novo_predio->setAltura($altura);
         $novo_predio->setLargura($largura);
          $novo_predio->setAndar($andar);
           $novo_predio->setQtd_Apt($qtd_apt);
        }
       
?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    
        <label> Nome: </label>
        <input type="text" name="nome">
    <br>
        <label> Altura: </label>
        <input type="text" name="altura">
<br>
        <label> largura: </label>
        <input type="text" name="largura">
    <br>  
        <label> Andar: </label>
        <input type="text" name="andar">
<br>
        <label> Quantidade de apartamentos: </label>
        <input type="text" name="qtd_apt">
      <br>

    <input type="submit" name="btn" value="Enviar">

</form>



    </form>
    
</body>
</html>

<?php 
    if($novo_predio->getNome() != "" &&
    $novo_predio->getAltura() != "" &&
    $novo_predio->getLargura() != "" &&
    $novo_predio->getAndar() != "" &&
    $novo_predio->getQtd_Apt() != ""){

    echo "Nome: " . $novo_predio->getNome() . "<br>". "Altura: " . $novo_predio->getAltura() . "<br>" . $novo_predio->getLargura() . "<br>" . $novo_predio->getAndar() . "<br>" . $novo_predio->getQtd_Apt() ;

}
?>