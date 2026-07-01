<?php 

    require "../Controller/Action_SQL.php";
    $nova_edicao = new Action_SQL;

    $id = $_GET['id'];

    $requisicao = $nova_edicao->selecionar_id($id);
    $resultado = $requisicao->fetch(PDO::FETCH_ASSOC);


?><!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Exemplo de projeto</title>

        <link rel="stylesheet" href="../Includes/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>


    <div class="container">

        <form action="../Services/validar_editar_action.php" method="post">

            <input type="hidden" name="id" value="<?=  $id ?>">
            
            <div> 

                <h1 style="text-align: center; margin-top: 3%">
                Editar</h1>

            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Nome do Usuario</label>
                    <input type="text" class="form-control" 
                    placeholder="Nome do Usuario..." name="nome" value="<?= htmlspecialchars($resultado['nome'])?>">

                </div>

                <div class="col-md-6">

                    <label class="form-label">email do Usuario</label>
                    <input type="text" class="form-control" 
                    placeholder="email..." name="email" value="<?=htmlspecialchars($resultado['email'])?>">

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">CPF</label>
                    <input type="text" class="form-control" placeholder="CPF..." name="cpf" value="<?=htmlspecialchars($resultado['cpf'])?>">

                </div>


            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">

                    <label class="form-label"> Senha:</label>
                    <textarea name="senha" rows="4" placeholder="Escreva a senha aqui" class="form-control"><?=htmlspecialchars($resultado['senha'])?></textarea>

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">

                    <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>

                </div>

            </div>


        </form>


        


    </div>

    <?php

            require "../includes/rodape.php";

        ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>