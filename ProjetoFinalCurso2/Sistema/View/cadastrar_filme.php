<?php
session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] == FALSE) {
    echo "<script>
            alert('Por favor faça o Login!');
            window.location.href='../../index.php';
          </script>";
    exit;
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cadastro de Filmes</title>

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
            box-shadow:0 15px 35px rgba(0,0,0,.3);
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

        .form-control,
        .form-select{
            border-radius:12px;
            height:48px;
            transition:.3s;
        }

        textarea.form-control{
            height:130px;
        }

        .form-control:focus,
        .form-select:focus{
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

        .row{
            margin-bottom:20px;
        }
    </style>

</head>

<body>

<div class="container">

    <?php require "../Includes/topo.php"; ?>

    <div class="card-form">

        <h1 class="titulo">🎬 Cadastro de Filmes</h1>

        <form action="../Services/Validar_Cadastro_Action_Filmes.php" method="post">

            <div class="row">

                <div class="col-md-6">
                    <label class="form-label">Título</label>
                    <input type="text" class="form-control" placeholder="Título do filme..." name="titulo" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ano</label>
                    <input type="number" class="form-control" placeholder="Ano de lançamento..." name="ano" required>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label class="form-label">Gênero</label>
                    <input type="text" class="form-control" placeholder="Gênero..." name="genero" required>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Classificação Indicativa</label>
                    <input type="text" class="form-control" placeholder="Classificação Indicativa..." name="classificacao_indicativa" required>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">
                    <label class="form-label">Diretor</label>
                    <input type="text" class="form-control" placeholder="Diretor..." name="diretor" required>
                </div>

            </div>

            <div class="row">

                <div class="col-md-12">
                    <label class="form-label">Sinopse</label>
                    <textarea class="form-control" name="sinopse" placeholder="Sinopse do filme..." required></textarea>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="" selected disabled>Selecione</option>
                        <option value="Nao alugado">Não alugado</option>
                        <option value="Alugado">Alugado</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Pessoa que alugou (se houver)</label>
                    <input type="text" class="form-control" placeholder="Nome de quem alugou..." name="pessoa_alugante">
                </div>

            </div>

            <div class="row mt-4">

                <div class="col-md-12">
                    <button class="btn btn-primary" type="submit">
                        💾 Cadastrar Filme
                    </button>
                </div>

            </div>

        </form>

    </div>

</div>

<?php require "../Includes/rodape.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>