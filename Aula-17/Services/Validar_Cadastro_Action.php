<?php 

    require "../Model/Livros.php";
    require "../Contoller/Action_SQL.php";

    $novo_livro = new Livros;
    $nova_insercao = new Action_SQL;
    if(isset($_POTS['cadastrar']))


        if(isset($_POST['btn'])){

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$genero = $_POST['genero'];
$quant_folhas = $_POST['quant_folhas'];
$classificacao = $_POST['classificacao'];


 if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='cadastrar_livro.php'; </script>";
       exit;}

       if(empty($descricao)){
      echo "<script> alert('Campo descricao em branco');
       window.location.href='cadastrar_livro.php'; </script>";
       exit;}

       if(empty($genero)){
      echo "<script> alert('Campo genero em branco');
       window.location.href='cadastrar_livro.php'; </script>";
       exit;}

       if(empty($quant_folhas)){
      echo "<script> alert('Campo quant_folhas em branco');
       window.location.href='cadastrar_livro.php'; </script>";
       exit;}

       if(empty($classificacao)){
      echo "<script> alert('classificacao);
       window.location.href='cadastrar_livro.php'; </script>";
       exit;}
        $novo_livro->setNome($nome);
        $novo_livro->setDescricao($descricao);
        $novo_livro->setGenero($genero);
        $novo_livro->setQuant_folhas($quant_folhas);
        $novo_livro->setClassificacao($classificacao);
       }
       if($novo_livro->getNome() !="" &&
        $novo_livro->getDescricao() !="" &&
        $novo_livro->getGenero() !="" &&
        $novo_livro->getQuant_folhas() != "" &&
        $novo_livro->getClassificacao() != ""){

        $nova_insercao->inserir(
        $novo_livro->getNome(),
        $novo_livro->getDescricao(), 
        $novo_livro->getGenero(), 
        $novo_livro->getQuant_folhas(), 
        $novo_livro->getClassificacao()
        );
        }
?>
