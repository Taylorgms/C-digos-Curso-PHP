<?php

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] == FALSE) {

    echo "<script>
            alert('Por favor faça o Login!');
            window.location.href='../../index.php';
          </script>";
    exit;
}

require "../Controller/Action_SQL.php";

$nova_selecao = new Action_SQL();
$resultado = $nova_selecao->selecionarFilmes();

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Filmes Cadastrados</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Includes/estilo.css">

    <style>

        body{
            background: linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
            min-height:100vh;
            font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;
        }

        .card-tabela{
            background:#fff;
            border-radius:20px;
            padding:35px;
            margin-top:40px;
            margin-bottom:40px;
            box-shadow:0 15px 35px rgba(0,0,0,.30);
        }

        h1{
            color:#0d6efd;
            font-weight:bold;
            text-align:center;
            margin-bottom:30px;
        }

        .table{
            border-radius:15px;
            overflow:hidden;
        }

        .table thead{
            background:#0d6efd;
            color:#fff;
        }

        .table tbody tr:hover{
            background:#f1f5f9;
            transition:.3s;
        }

        .btn{
            border-radius:8px;
        }

        .btn-primary{
            margin-right:5px;
        }

        .badge{
            font-size:14px;
            padding:8px 12px;
        }

        .top-bar{
            display:flex;
            justify-content:space-between;
            align-items:center;
            margin-bottom:25px;
        }

    </style>

</head>

<body>

<div class="container">

    <?php require "../Includes/topo.php"; ?>

    <div class="card-tabela">

        <div class="top-bar">

            <h1 class="mb-0">🎬 Filmes Cadastrados</h1>

            <a href="cadastro_filmes.php" class="btn btn-success">
                ➕ Novo Filme
            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Ano</th>
                        <th>Gênero</th>
                        <th>Descrição</th>
                        <th>Status</th>
                        <th>Alugado por</th>
                        <th class="text-center">Ações</th>
                    </tr>

                </thead>

                <tbody>

                <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC)) : ?>

                    <tr>

                        <td><?= $row['id']; ?></td>

                        <td>
                            <strong><?= $row['titulo']; ?></strong>
                        </td>

                        <td><?= $row['ano']; ?></td>

                        <td><?= $row['genero']; ?></td>

                        <td><?= substr($row['sinopse'],0,70); ?>...</td>

                        <td>

                            <?php if($row['status'] == "Alugado"){ ?>

                                <span class="badge bg-danger">
                                    <?= $row['status']; ?>
                                </span>

                            <?php } else { ?>

                                <span class="badge bg-success">
                                    <?= $row['status']; ?>
                                </span>

                            <?php } ?>

                        </td>

                        <td>

                            <?= !empty($row['pessoa_alugante']) ? $row['pessoa_alugante'] : "-" ?>

                        </td>

                        <td class="text-center">

                            <a href="editar_filme.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                ✏ Editar
                            </a>

                            <a href="../Services/deletar.action.php?id=<?= $row['id']; ?>"
                               onclick="return confirm('Tem certeza que deseja excluir este filme?')"
                               class="btn btn-danger btn-sm">

                                🗑 Excluir

                            </a>

                        </td>

                    </tr>

                <?php endwhile; ?>

                </tbody>

            </table>

        </div>

    </div>

</div>

<?php require "../Includes/rodape.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>