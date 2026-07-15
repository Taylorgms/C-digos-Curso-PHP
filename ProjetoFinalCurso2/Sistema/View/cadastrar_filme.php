
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Filme</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <?php require "../Includes/topo.php"; ?>

        <form action="../Services/Validar_Cadastro_Action_Filmes.php" method="post">

            <div>
                <h1 style="text-align: center; margin-top: 3%">Cadastro de Filmes</h1>
            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Título</label>
                    <input type="text" class="form-control" placeholder="Título do filme..." name="titulo">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Ano</label>
                    <input type="number" class="form-control" placeholder="Ano de lançamento..." name="ano">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Gênero</label>
                    <input type="text" class="form-control" placeholder="Gênero..." name="genero">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Classificação Indicativa</label>
                    <input type="text" class="form-control" placeholder="Classificação Indicativa..." name="classificacao_indicativa">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">
                    <label class="form-label">Diretor</label>
                    <input type="text" class="form-control" placeholder="Diretor..." name="diretor">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">
                    <label class="form-label">Sinopse</label>
                    <textarea name="sinopse" rows="4" placeholder="Sinopse do filme..." class="form-control"></textarea>
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                        <option value="Nao alugado">Não alugado</option>
                        <option value="Alugado">Alugado</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label class="form-label">Pessoa que alugou (se houver)</label>
                    <input type="text" class="form-control" placeholder="Nome de quem alugou..." name="pessoa_alugante">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>
                </div>
            </div>

        </form>

    </div>

    <?php require "../Includes/rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
