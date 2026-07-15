<?php

    require "../Controller/Action_SQL.php";

    if (!isset($_GET['id']) || trim($_GET['id']) == "") {
        echo "<script> alert('Filme inválido'); window.location.href='home.php'; </script>";
        exit;
    }

    $id = $_GET['id'];

    $acao = new Action_SQL;
    $requisicao = $acao->selecionarFilmeId($id);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);

    if (!$resultado) {
        echo "<script> alert('Filme não encontrado'); window.location.href='home.php'; </script>";
        exit;
    }

?><!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Editar Filme</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <?php require "../Includes/topo.php"; ?>

        <form action="../Services/validar_editar_action_filmes.php" method="post">

            <input type="hidden" name="id" value="<?= $id ?>">

            <div>
                <h1 style="text-align: center; margin-top: 3%">Editar Filme</h1>
            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Título</label>
                    <input type="text" class="form-control" name="titulo" value="<?= $resultado['titulo'] ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ano</label>
                    <input type="number" class="form-control" name="ano" value="<?=$resultado['ano'] ?>">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Gênero</label>
                    <input type="text" class="form-control" name="genero" value="<?= $resultado['genero'] ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Classificação Indicativa</label>
                    <input type="text" class="form-control" name="classificacao_indicativa" value="<?= $resultado['classificacao_indicativa'] ?>">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">
                    <label class="form-label">Diretor</label>
                    <input type="text" class="form-control" name="diretor" value="<?= $resultado['diretor'] ?>">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">
                    <label class="form-label">Sinopse</label>
                    <textarea name="sinopse" rows="4" class="form-control"><?= $resultado['sinopse'] ?></textarea>
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="Nao alugado" <?= $resultado['status'] == "nao alugado" ? "selected" : "" ?>>Não alugado</option>
                        <option value="Alugado" <?= $resultado['status'] == "alugado" ? "selected" : "" ?>>Alugado</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Pessoa que alugou</label>
                    <input type="text" class="form-control" name="pessoa_alugante" value="<?= $resultado['pessoa_alugante'] ?>">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" name="enviar" type="submit">Salvar</button>
                </div>
            </div>

        </form>

    </div>

    <?php require "../Includes/rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
