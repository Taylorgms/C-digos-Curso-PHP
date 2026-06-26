<?php 

    require "../Model/Livros.php";
    require "../Controller/Action_SQL.php";

    $editar_livro = new Livros;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $genero = $_POST['genero'];
    $quant_folhas = $_POST['quant_folhas'];
    $classificacao = $_POST['classificacao'];


    if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='../view/cadastrar_livro.php'; </script>";
       exit;}

       if(empty($descricao)){
      echo "<script> alert('Campo descricao em branco');
       window.location.href='../view/cadastrar_livro.php'; </script>";
       exit;}

       if(empty($genero)){
      echo "<script> alert('Campo genero em branco');
       window.location.href='../view/cadastrar_livro.php'; </script>";
       exit;}

       if(empty($quant_folhas)){
      echo "<script> alert('Campo quant_folhas em branco');
       window.location.href='../view/cadastrar_livro.php'; </script>";
       exit;}

       if(empty($classificacao)){
      echo "<script> alert('classificacao);
       window.location.href='../view/cadastrar_livro.php'; </script>";
       exit;}
        $editar_livro->setNome($nome);
        $editar_livro->setDescricao($descricao);
        $editar_livro->setGenero($genero);
        $editar_livro->setQuant_folhas($quant_folhas);
        $editar_livro->setClassificacao($classificacao);
    }
       if($editar_livro->getNome() !="" &&
        $editar_livro->getDescricao() !="" &&
        $editar_livro->getGenero() !="" &&
        $editar_livro->getQuant_folhas() != "" &&
        $editar_livro->getClassificacao() != ""){

        $nova_edicao->editar($id,
        $editar_livro->getNome(),
        $editar_livro->getDescricao(), 
        $editar_livro->getGenero(), 
        $editar_livro->getQuant_folhas(), 
        $editar_livro->getClassificacao()
        );
        }
?>
