<?php
//Chama as classes para dentro do codigo
require "Filha.php";
require "Mae.php";
require "Pai.php";

//conecta uma variavel com a classe
$mostrar_mae = new Mae;
$mostrar_pai = new Pai;
$mostrar_filha= new Filha;

//imprimir na tela
echo "Nome da Mãe: " . $mostrar_mae->nome . "<br>" .
"Idade da Mãe: " . $mostrar_mae->idade .  "<br>" .
"Altura da Mãe: " . $mostrar_mae->altura . "<br>";
echo "<br>";
echo "Nome da Pai: " . $mostrar_pai->nome . "<br>" .
"Idade da Pai: " . $mostrar_pai->idade .  "<br>" .
"Altura da Pai: " . $mostrar_pai->altura . "<br>";
echo "<br>";
echo "Nome da Filha: " . $mostrar_filha->nome . "<br>" .
"Idade da Filha: " . $mostrar_filha->idade .  "<br>" .
"Altura da Filha: " . $mostrar_filha->altura . "<br>";
?>