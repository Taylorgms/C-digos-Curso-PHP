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
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<?php require "topo.php"; ?>  
<body>
nada com nada
       
        <?php include("rodape.php"); ?>  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>