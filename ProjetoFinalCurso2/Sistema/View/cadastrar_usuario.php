<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de Usuário</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">

        <form action="../Services/Validar_Cadastro_Action_usuarios.php" method="post">

            <div>
                <h1 style="text-align: center; margin-top: 3%">Cadastro de Usuário</h1>
            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Nome do Usuário</label>
                    <input type="text" class="form-control"
                    placeholder="Nome do Usuário..." name="nome">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control"
                    placeholder="Email..." name="email">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">
                    <label class="form-label">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone..." name="telefone">
                </div>

                <div class="col-md-6">
                    <label class="form-label">Senha</label>
                    <input type="password" name="senha" placeholder="Senha..." class="form-control">
                </div>

            </div>

            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12">
                    <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>
                </div>
            </div>

            <div style="margin-top: 3%;" class="row">
                <div class="col-md-12" style="text-align: center;">
                    <a href="../../index.php">Já tem conta? Faça login</a>
                </div>
            </div>

        </form>

    </div>

    <?php require "../Includes/rodape.php"; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
