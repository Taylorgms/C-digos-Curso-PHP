<?php

$site = "Sistema de cadastro";

$estilo = "style=\"background-color: red; color: white;\"";


$frutas = ['abacaxi', 'maçã', 'manga', 'banana', 'mamão', 'melão', 'kiwi', 'laranja', 'melancia'];


$frutas = isset($_GET['listaFrutas']) ? explode(',', $_GET['listaFrutas']) : $frutas;


$novaFruta = $_GET['fruta'] ?? null;

if (isset($novaFruta)) {
    $frutas[] = $novaFruta;
}


?>

<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeira página PHP</title>
</head>
<body <?= $estilo ?>>

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="index.php">site</a>
  </li>
</ul>

    <h1><?= $site ?></h1>

    <form>
        <input type="hidden" name="listaFrutas" value="<?= implode(',', $frutas); ?>" />
        <input type="text" name="fruta" placeholder="Nova fruta . . ." />
        <input type="submit" value="Salvar" />
    </form>

    <ul>
        <?php foreach ($frutas as $fruta): ?>

            <li><?= $fruta ?></li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>
