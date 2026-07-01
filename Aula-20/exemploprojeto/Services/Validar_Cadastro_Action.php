<?php 

    require "../Model/Usuarios.php";
    require "../Controller/Action_SQL.php";

    $novo_usuario = new Usuarios;
    $nova_insercao = new Action_SQL;
    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];


    if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='../view/cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($senha)){
      echo "<script> alert('Campo senha em branco');
       window.location.href='../view/cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($email)){
      echo "<script> alert('Campo email em branco');
       window.location.href='../view/cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($cpf)){
      echo "<script> alert('Campo cpf em branco');
       window.location.href='../view/cadastrar_usuario.php'; </script>";
       exit;}

        $novo_usuario->setNome($nome);
        $novo_usuario->setsenha($senha);
        $novo_usuario->setemail($email);
        $novo_usuario->setcpf($cpf);
    }
       if($novo_usuario->getNome() !="" &&
        $novo_usuario->getsenha() !="" &&
        $novo_usuario->getemail() !="" &&
        $novo_usuario->getcpf() != ""){

        $nova_insercao->inserir(
        $novo_usuario->getNome(),
        $novo_usuario->getsenha(), 
        $novo_usuario->getemail(), 
        $novo_usuario->getcpf());
        }
?>
