<?php
	function somar(Float $valorA, Float $ValorB) : void {
	  $resultado = $valorA + $ValorB;
	  
	  echo "soma de " . $valorA . "+" . $ValorB . "=" .	$resultado . "\n\n";}
somar(44, 44);

function Diminuir(Float $A, Float $B) : Float {
	  $resultadomenor = $A - $B;
	  
	  return $resultadomenor;
}
$res = Diminuir(23,20);

echo "teste função:" . $res . "\n\n";
?>





<?php


echo "Exercio 1\n\n";
function boas() : void {
  echo "Boas vindas Taylor!";
  
}
boas();

echo "\n\n";
echo "Exercio 2\n\n";
function Nomes ($usuario) : void {
  echo "Bem vindo! " . $usuario;
}
Nomes("Marco Tulio");

echo "\n\n";
echo "Exercio 3\n\n";
function Numeros ($num) : void {
 if ($num % 2 == 1 ){
   echo "o " . $num . "é impar ";
 }
 
 else {
   echo "o " . $num . " é par ";
 }
}
Numeros(7);


  echo "\n\n";
  echo "Exercio 4\n\n";
	function somar(Float $valorA, Float $ValorB) : void {
	  $resultado = $valorA + $ValorB;
	  echo "soma de " . $valorA . " + " . $ValorB . " = " .	$resultado . "\n\n";}
somar(44, 44);


function Diminuir(float $A, float $B): float {
    $resultadomenor = $A - $B;
    return $resultadomenor;
}

$A = 23;
$B = 20;

$resultado = Diminuir($A, $B);

echo "Subtração de " . $A . " - " . $B . " = " . $resultado . "\n\n";



function mult(Float $C, Float $D) : void {
	  $resultado = $C * $D;
	  
	  echo "Multiplicação de " . $C . " x " . $D . " = " .	$resultado . "\n\n";}
mult(11, 11);


function Div(Float $E, Float $F) : void {
	  if ($E == 0 || $F == 0){
      echo "Essa divisão não é possivel.";
      return;
    }
    
    $resultado = $E / $F;
	echo "A divisão " . $E . " / " . $F . " = " .	$resultado . "\n\n";
    
}
Div(16, 4);

  echo "Exercio 5\n\n";

function grandao(float $enorme) : bool {
    if ($enorme > 100) {
        echo "O numero " . $enorme . " é valido\n";
        return true;
    } else {
        echo "menor ou igual a 100 nem cola\n\n";
        return false;
    }
}
grandao(100);

echo "Exercio 6\n\n";
function Maior(float $G, float $H) : void{
  if($G > $H){
    echo $G;
  }
  else{
    echo $H;
  }
}
Maior(88,89);
echo "\n\n";
echo "Exercio 7\n\n";


function menordtodos(float $i, float $j, float $k, float $l){
    $menor = $i;

    if ($j < $menor) {
        $menor = $j;
    }
    if ($k < $menor) {
        $menor = $k;
    }
    if ($l < $menor) {
        $menor = $l;
    }
    return $menor;
}
echo menordtodos(77, 66, 33, 44);


echo "\n\n";
echo "Exercio 8\n\n";

function DIFICIL(){
  $vet = str_split("John"); //vira ["J","o","h","n"]
  foreach ($vet as $v) {
    echo $v . " ";
  }
}

DIFICIL();
?>

