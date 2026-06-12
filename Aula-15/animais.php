<?php
//chamei a classe do Animal
require "Animal.php";

$novo_animal = new Animal;
//vou criar um animal
$novo_animal->nome = "Coiote";
$novo_animal->patas = "4";
$novo_animal->habitat = "Selva";
$novo_animal->comida_favorita = "Papaléguas";

echo "Nome: " . $novo_animal->nome . "<br>" .
"Patas: " . $novo_animal->patas . "<br>" .
"Habitat: " . $novo_animal->habitat . "<br>" .
"Comida Favorita: " . $novo_animal->comida_favorita . "<br>";

echo "<br>";

///////////////////////////////////////////////


$novo_animal->nome = "Papaléguas";
$novo_animal->patas = "2";
$novo_animal->habitat = "savana";
$novo_animal->comida_favorita = "Alpiste";

echo "Nome: " . $novo_animal->nome . "<br>" .
"Patas: " . $novo_animal->patas . "<br>" .
"Habitat: " . $novo_animal->habitat . "<br>" .
"Comida Favorita: " . $novo_animal->comida_favorita . "<br>";

echo "<br>";


$novo_animal->nome = "tubarão";
$novo_animal->patas = "0";
$novo_animal->habitat = "Mar";
$novo_animal->comida_favorita = "Carne";

echo "Nome: " . $novo_animal->nome . "<br>" .
"Patas: " . $novo_animal->patas . "<br>" .
"Habitat: " . $novo_animal->habitat . "<br>" .
"Comida Favorita: " . $novo_animal->comida_favorita . "<br>";

echo "<br>";



?>