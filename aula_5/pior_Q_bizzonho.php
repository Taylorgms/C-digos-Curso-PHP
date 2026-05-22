<?php
echo "| Desafio 1 | Array simples + loop \n";
	$array = [
	"item1",
	"item2",
	"item3",
	"item4",
	"item5"
	];

foreach ($array as $lista) {
    echo $lista . "\n";
}


echo "\n\n";

echo "| Desafio 2 | Array numérico + soma \n";
$numeros = ["5","4","3","3",'10'];
$soma = 0;

foreach ($numeros as $numerof) {
  $soma += $numerof;
}

echo $soma . "\n\n";


echo "| Desafio 3 | Média de valores \n";
$media = 0;
  foreach ($numeros as $numerof) {
    $media += $numerof / 5;
}
    echo $media . "\n\n";
  
  
  echo "| Desafio 4 | Exibir apenas números pares \n";
$um_a_10 = ["1",'2','3','4','5','6','7','8','9','10'];
foreach ($um_a_10 as $pares)
{
  if ($pares % 2 == 0 ) {
  echo $pares . " é par\n";}
}

echo $media . "\n\n";
echo "| Desafio 5 | Contar elementos \n";
$quantidade = 0;

foreach ($um_a_10 as $item){
  $quantidade ++;
  
}
echo "são " . $quantidade . " itens dentro do vetor";

 echo "\n\n";
 echo "| Desafio 6 | Maior valor do array \n";

$catarOmaior = [10, 25, 3, 9, 42, 99, -5];
$maior = $catarOmaior[0];
foreach ($catarOmaior as $valor) {
  if($maior < $valor) {
    $maior = $valor;
  }
  
}
echo $maior;

echo "\n\n";
echo "| Desafio 7 | Menor valor do array \n";

$catarOmenor = [10, 25, 3, 9, 42, 99, -5];
$menor = $catarOmenor[0];
foreach ($catarOmenor as $valor) {
  if($menor > $valor) {
    $menor = $valor;
  }
  
}
echo $menor;

echo "\n\n";
echo "| Desafio 8 Array associativo|\n";

$pessoa = [
  "nome" => "João",
  "idade" => 25,
  "cidade" => "Caxias do Sul"
];
foreach ($pessoa as $inf => $conteudo){
  echo $inf . ": " . $conteudo . "\n";
}
echo "\n\n";
echo "| Desafio 9 | Lista de produtos \n";
$produtos = [
    ["nome" => "Notebook", "preco" => 3500],
    ["nome" => "Mouse", "preco" => 80],
    ["nome" => "Teclado", "preco" => 150],
    ["nome" => "Monitor", "preco" => 900],
    ["nome" => "Fone de ouvido", "preco" => 200]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " - Preço: R$ " . $produto["preco"] . "\n";
}

echo "\n\n";
echo "| Desafio 10 | Soma de preços \n";

$tabelinha = [
  ["nome" => "Notebook", "preco" => 1000],
  ["nome" => "Mouse", "preco" => 333]];
  $total = 0;
  
foreach ($tabelinha as $valor){
   $total += $valor["preco"];
}
echo $total;
echo "\n\n";
echo "| Desafio 11 | Filtrar valores maiores que 50 \n";

$valormaiorq50 = [214, 1223, 24 ,44 ,51 ,4 ,5];
foreach ($valormaiorq50 as $sera){
  if ($sera > 50){
    echo $sera . " é maior que 50\n";
  }
}
echo "\n\n";
echo "| Desafio 12 | Pegar array mult. por 2 criando outro array \n";
$numeross = [2, 5, 10, 20, 3];
$dobrados = [];
 foreach ($numeross as $n){
   $dobrados[] = $n * 2;
 }
 print_r($dobrados);
 
 echo "\n\n";
echo "| Desafio 14 | Buscar valor \n";
  $aleatorio = ['batata', 'azul', 'baleia', 4, 5, 6, 7, 8 ];
foreach ($aleatorio as $algo){
  if ($algo == 'baleia') { 
  break;
  }
}
echo $algo;

echo "\n\n";
echo "| Desafio 15 | Contar ocorrencias e mostrar quantas vezes algum se repete\n";


?> 