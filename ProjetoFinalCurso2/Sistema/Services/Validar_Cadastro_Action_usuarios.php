<?php

    require_once '../PHPMailer-master/src/PHPMailer.php';
    require_once '../PHPMailer-master/src/SMTP.php';
    require_once '../PHPMailer-master/src/Exception.php';

    require "../Model/Usuarios.php";
    require "../Controller/Action_SQL.php";

    $novo_usuario = new Usuarios;
    $nova_insercao = new Action_SQL;

    if(isset($_POST['enviar'])){

        $nome = trim($_POST['nome']);
        $senha = trim($_POST['senha']);
        $email = trim($_POST['email']);
        $telefone = trim($_POST['telefone']);

        if(empty($nome)){
            echo "<script> alert('Campo nome em branco');
            window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;
        }

        if(empty($email)){
            echo "<script> alert('Campo email em branco');
            window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<script> alert('Email inválido');
            window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;
        }

        if(empty($senha)){
            echo "<script> alert('Campo senha em branco');
            window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;
        }

        if(empty($telefone)){
            echo "<script> alert('Campo telefone em branco');
            window.location.href='../View/cadastrar_usuario.php'; </script>";
            exit;
        }

        $novo_usuario->setNome($nome);
        $novo_usuario->setsenha($senha);
        $novo_usuario->setemail($email);
        $novo_usuario->settelefone($telefone);

        $nova_insercao->inserirUsuario(
            $novo_usuario->getNome(),
            $novo_usuario->getsenha(),
            $novo_usuario->getemail(),
            $novo_usuario->gettelefone()
        );

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
                    echo "<script> alert('Email enviado com sucesso');window.location.href='../View/cadastrar_usuario.php'; </script>"; 
                } else {
                    error_log('Erro ao enviar e-mail: ' . $mail->ErrorInfo);
                }
            } catch (Exception $e) {
                echo "<script> alert('Erro ao enviar o email');window.location.href='../View/cadastrar_usuario.php'; </script>"; 
            }
    }
?>
