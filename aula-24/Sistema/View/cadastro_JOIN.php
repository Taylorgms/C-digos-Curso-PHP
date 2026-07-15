<?php

    require "../Controller/Action_SQL.php";

    $nova_selecao = new Action_SQL;
    $resultado_pais = $nova_selecao->selecionar("pais");
    $resultado_estado = $nova_selecao->selecionar("estado");
    $resultado_cidade = $nova_selecao->selecionar("cidade");
    $resultado_JOIN = $nova_selecao->selecionar_JOIN();
    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Regioes</title>
  </head>
  <body>

    <div class="container">

    <?php
        require "../Includes/topo.php";
    ?>

    <h1 style="margin-bottom: 3%; margin-top: 3%; text-align: center;"> Regiões cadastradas</h1>

    <form action="../Services/validar_cadastro_action.php" method="post">

        <div class="row" style="margin-bottom: 3%;">
            <div class="col-md-4">
                <label class="form-label">Pais</label>
                <select class="form-select" name="pais">
                    <option value="" selected>Selecione o pais</option>

                    <?php while($opcoes_pais = $resultado_pais->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_pais['id']) ?>">
                            <?= htmlspecialchars($opcoes_pais['pais']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="col-md-4">
               
                <label class="form-label">Estado</label>
                <select class="form-select" name="estado">
                    <option value="" selected>Selecione o estado</option>
                    <?php while($opcoes_estado = $resultado_estado->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_estado['id']) ?>">
                            <?= htmlspecialchars($opcoes_estado['estado']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>
                
            </div>
            <div class="col-md-4">   
                <label class="form-label">Cidade</label>
                <select class="form-select" name="cidade">
                    <option value="" selected>Selecione o cidade</option>
                    <?php while($opcoes_cidade = $resultado_cidade->fetch(PDO::FETCH_ASSOC)) :  ?>
                        <option value="<?= htmlspecialchars($opcoes_cidade['id']) ?>">
                            <?= htmlspecialchars($opcoes_cidade['cidade']) ?>
                        </option>
                    <?php endwhile; ?>
                </select>      
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <button type="submit" name="enviar2" class="btn btn-primary">Cadastrar região</button>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Pais</th>
                <th scope="col">Estado</th>
                <th scope="col">Cidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
        <!-- Pega os valores recebidos do SELECT feito e entrega a variavel row --->
            <?php while($row = $resultado_JOIN->fetch(PDO::FETCH_ASSOC)) :  ?>

            <tr>
                <td> <?= $row['id']; ?> </td>
                <td> <?= $row['pais']; ?> </td>
                <td> <?= $row['estado']; ?> </td>
                <td> <?= $row['cidade']; ?> </td>
                <td> 
                    <a class="btn btn-primary" href="editar_regioes.php?id= <?= $row['id']; ?>">Editar</a> 
                    <a class="btn btn-danger" href="../Services/deletar_action.php?id=<?= $row['id']; ?>&PEC=nenhum" onclick="return confirm('Você tem certeza que quer deletar?')">Deletar</a> 
                </td>
            </tr>

            <?php endwhile; ?>
        </tbody>
    </table>

    

    </div>
    <?php

        require "../Includes/rodape.php";

    ?>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  </body>
</html>