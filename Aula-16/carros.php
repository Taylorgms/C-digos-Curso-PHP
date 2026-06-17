<?php 
    require "Carro.php";
    $nova_ordem = new Carro;

    $carro_atual = $nova_ordem->Buzinar();

    echo "<br>";

    $carro_atual = $nova_ordem->Ligando("Desligado");

     echo "<br>";

    $carro_atual = $nova_ordem->Desligando($carro_atual);

    echo "<br>";

    $carro_atual = $nova_ordem->Desligando($carro_atual);
?>