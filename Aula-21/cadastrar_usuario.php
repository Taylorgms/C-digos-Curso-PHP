<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto de Usuario</title>

    <link rel="stylesheet" href="../Includes/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">


        <form action="validar_e_mandar_banco_email.php" method="post">

            <div> 

                <h1 style="text-align: center; margin-top: 3%">Cadastro de Usuarios</h1>

            </div>

            <div style="margin-top: 6%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Nome do Usuario</label>
                    <input type="text" class="form-control" 
                    placeholder="Nome do Usuario..." name="nome">

                </div>

                <div class="col-md-6">

                    <label class="form-label">Email</label>
                    <input type="text" class="form-control" 
                    placeholder="Email..." name="email">

                </div>

            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Idade:</label>
                    <input type="text" class="form-control" placeholder="Idade..." name="idade">

                </div>
           

                <div class="col-md-6">

                    <label class="form-label">Peso:</label>
                    <input name="peso" placeholder="Peso..." class="form-control"></input>

                </div>


                <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Altura:</label>
                    <input type="text" class="form-control" placeholder="Altura..." name="altura">

                </div>


                 <div style="margin-top: 3%;" class="row">

                <div class="col-md-6">

                    <label class="form-label">Signo:</label>
                    <input type="text" class="form-control" placeholder="Signo..." name="altura">

                </div>



            </div>

            <div style="margin-top: 3%;" class="row">

                <div class="col-md-12">

                    <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>

                </div>

            </div>


        </form>


        


    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>