<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Usuário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Includes/estilo.css">

    <style>

        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
            min-height:100vh;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .card-form{
            background:#fff;
            border-radius:20px;
            padding:40px;
            margin-top:50px;
            margin-bottom:50px;
            box-shadow:0 15px 35px rgba(0,0,0,.30);
        }

        .titulo{
            text-align:center;
            color:#0d6efd;
            font-weight:bold;
            margin-bottom:35px;
        }

        .form-label{
            font-weight:600;
            color:#444;
        }

        .form-control{
            border-radius:12px;
            height:48px;
            transition:.3s;
        }

        .form-control:focus{
            border-color:#0d6efd;
            box-shadow:0 0 12px rgba(13,110,253,.25);
        }

        .btn-primary{
            width:100%;
            padding:12px;
            border-radius:12px;
            font-size:18px;
            font-weight:bold;
            transition:.3s;
        }

        .btn-primary:hover{
            transform:translateY(-3px);
            box-shadow:0 10px 20px rgba(13,110,253,.35);
        }

        .login-link{
            text-align:center;
            margin-top:20px;
        }

        .login-link a{
            text-decoration:none;
            color:#0d6efd;
            font-weight:600;
        }

        .login-link a:hover{
            text-decoration:underline;
        }

        .row{
            margin-bottom:20px;
        }

    </style>

</head>

<body>

<div class="container">

    <div class="card-form">

        <h1 class="titulo">👤 Cadastro de Usuário</h1>

        <form action="../Services/Validar_Cadastro_Action_usuarios.php" method="post">

            <div class="row">

                <div class="col-md-6">
                    <label class="form-label">Nome do Usuário</label>
                    <input type="text" class="form-control" placeholder="Nome do Usuário..." name="nome" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email..." name="email" required>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone..." name="telefone" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <input type="password" class="form-control" placeholder="Senha..." name="senha" required>
                </div>

            </div>

            <div class="row mt-4">

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">
                        👤 Cadastrar Usuário
                    </button>
                </div>

            </div>

            <div class="login-link">
                <a href="../../index.php">
                    Já tem uma conta? Faça login
                </a>
            </div>

        </form>

    </div>

</div>

<?php require "../Includes/rodape.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>