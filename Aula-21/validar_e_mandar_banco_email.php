<?php 

    require_once 'PHPMailer-master/src/PHPMailer.php';
    require_once 'PHPMailer-master/src/SMTP.php';
    require_once 'PHPMailer-master/src/Exception.php';

    require "Usuarios.php";
    require "Action_SQL.php";

    $novo_usuario = new Usuarios;
    $nova_insercao = new Action_SQL;
    if(isset($_POST['enviar'])){

    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $email = $_POST['email'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];
    $signo = $_POST['signo'];


    if(empty($nome)){
      echo "<script> alert('Campo nome em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($idade)){
      echo "<script> alert('Campo idade em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($email)){
      echo "<script> alert('Campo email em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($altura)){
      echo "<script> alert('Campo altura em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($peso)){
      echo "<script> alert('Campo peso em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

       if(empty($signo)){
      echo "<script> alert('Campo signo em branco');
       window.location.href='cadastrar_usuario.php'; </script>";
       exit;}

        $novo_usuario->setNome($nome);
        $novo_usuario->setidade($idade);
        $novo_usuario->setemail($email);
        $novo_usuario->setaltura($altura);
        $novo_usuario->setpeso($peso);
        $novo_usuario->setsigno($signo);
    }


       if($novo_usuario->getNome() !="" &&
        $novo_usuario->getidade() !="" &&
        $novo_usuario->getemail() !="" &&
        $novo_usuario->getaltura() != "" &&
        $novo_usuario->getpeso() != "" &&
        $novo_usuario->getsigno() != ""){

        $nova_insercao->inserir(
        $novo_usuario->getNome(),
        $novo_usuario->getidade(), 
        $novo_usuario->getemail(),
        $novo_usuario->getaltura(),
        $novo_usuario->getpeso(), 
        $novo_usuario->getsigno()); 
        

        
        

    // Configurar e enviar o e-mail
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;
            $mail->Username = 't88422858@gmail.com';
            $mail->Password = 'cxaquvkbhlhdarad';
            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->CharSet = 'UTF-8';

            $mail->setFrom('t88422858@gmail.com', 'Email para envio de informações');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Teste de email';

                $mail->Body = "
                    <h1> Cadastrado </h1>
                    ";


                // Enviar o e-mail antes de retornar a resposta
                if ($mail->send()) {
                    echo "<script> alert('Email enviado com sucesso');window.location.href='cadastrar_usuario.php'; </script>"; 
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='cadastrar_usuario.php'; </script>"; 
            }
    

        }

?>
