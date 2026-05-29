
<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Aula 9</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<?php require "topo.php"; ?>
        <div class="col-md-4">
            <h1 class="text-center"><br> Já tem uma conta?</h1>
        </div>
    

    <div class="container">

        <form method="post" action="Loguin_action.php" autocomplete="off">

        <div class="row">

            <div class="col-md-12 mb-3">
                <label class="form-label">Nome do Usuário</label>

                <input 
                type="text"
                name="nome"
                class="form-control"
                placeholder="Digite seu nome aqui">
            </div>

        </div>

        <div class="row">
            
    <div class="col-md-4 mb-3">
        <label class="form-label">CPF</label>

        <input 
        type="number"
        name="cpf"
        class="form-control"
        placeholder="informe seu CPF">
    </div>
           
    <div class="col-md-4 mb-3">
        <label class="form-label">Endereço</label>

        <input 
        type="text"
        name="endereço"
        class="form-control"
        placeholder="informe seu endereço">
    </div>

    <div class="col-md-2 mb-3">
        <label for="nivel" class="form-label">Nível</label>

        <select id="nivel" name="nivel" class="form-select">
            <option value="" disabled selected>Nível</option>
            <option value="1">Admin</option>
            <option value="2">Cliente</option>
            <option value="3">Usuario</option>
            <option value="4">Visitante</option>
        </select>
    </div>

</div>

<div class="row">

    <div class="col-md-4 mb-3">
        <label class="form-label">Email</label>

        <input 
        type="text"
        name="email"
        class="form-control"
        placeholder="informe seu email">
    </div>
            
    <div class="col-md-4 mb-3">
        <label class="form-label">Senha</label>

        <input 
        type="password"
        name="senha"
        class="form-control"
        placeholder="informe sua senha">
    </div>
        <div class="col-md-4 mb-3">
                <label for="nivel" class="form-label">Status</label>

                <select name="status" class="form-select">
                    <option value="" disabled selected>Status</option>
                    <option value="1">Ativado</option>
                    <option value="2">Desativado</option>
                </select>
            </div>
</div> 
      
      
        <div> 
            <button type="submit" name="btn" style="margin-top:0.5%;">Enviar</button>

<button type="reset" name="btnC" >Cancelar</button>
        </div>

  </form>
     <div class="col-md-6 mb-3" >
            <a href="Cadastro.php" style="text-decoration: none; color:black">Não tem uma conta? Clique aqui</a>
        </div>
    </div>

        <?php require "rodape.php"; ?>
</body>
</html>