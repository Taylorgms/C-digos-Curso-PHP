<?php

    require "../Controller/Action_SQL.php";

    $nova_selecao = new Action_SQL;
    $resultado = $nova_selecao->selecionarFilmes();

?>



<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Filmes</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div style="margin-top: 2%;" class="container">

        <?php

            require "../Includes/topo.php";

        ?>

        <h1 style="text-align: center; margin-bottom: 3%;">Filmes Cadastrados</h1>

        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Título</th>
                <th scope="col">Ano</th>
                <th scope="col">Gênero</th>
                <th scope="col">Descrição</th>
                <th scope="col">Status</th>
                <th scope="col">Alugado por</th>
                <th scope="col">Ações</th>
            </tr>
            </thead>
            <tbody>

<!--- Traduz as informações recebidas do banco para serem impressas--->
            <?php while($row = $resultado->fetch(PDO::FETCH_ASSOC) ) : ?>
            <tr>
                <th><?= $row['id']; ?></th>
                <td><?= $row['titulo']; ?></td>
                <td><?= $row['ano']; ?></td>
                <td><?= $row['genero']; ?></td>
                <td><?= $row['sinopse']; ?></td>
                <td><?= $row['status']; ?></td>
                <td><?= $row['pessoa_alugante']; ?></td>
                <td>
                    <a href="editar_filme.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm"> Editar </a>
                    <a href="../Services/deletar.action.php?id=<?= $row['id']; ?>" onclick="return confirm('Você tem certeza que deseja deletar?')" class="btn btn-danger btn-sm"> Deletar </a>
                </td>

            </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

    </div>

    <?php

            require "../Includes/rodape.php";

        ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>