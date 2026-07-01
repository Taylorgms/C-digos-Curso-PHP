<?php 

    require "../Model/Usuarios.php";
    require "../Controller/Action_SQL.php";

    $editar_usuario = new Usuarios;
    $nova_edicao = new Action_SQL;

    if(isset($_POST['enviar'])){

    $id = $_POST['id'];
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

       
        $editar_usuario->setNome($nome);
        $editar_usuario->setsenha($senha);
        $editar_usuario->setemail($email);
        $editar_usuario->setcpf($cpf);
    }
       if($editar_usuario->getNome() !="" &&
        $editar_usuario->getsenha() !="" &&
        $editar_usuario->getemail() !="" &&
        $editar_usuario->getcpf() != ""){

        $nova_edicao->editar($id,
        $editar_usuario->getNome(),
        $editar_usuario->getsenha(), 
        $editar_usuario->getemail(), 
        $editar_usuario->getcpf(),
        );
        }
?>
