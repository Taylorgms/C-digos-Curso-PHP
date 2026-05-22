<?php
	echo "Hello, World!\n\n";
	
	$rotina_get = "Metodo get\n";
	$rotina_post = "Metodo post\n";
	$rotina_put = "Metodo put\n";
	$rotina_delete = "metodo delete\n";
	
	$metodo = "GET";
	
	switch ($metodo){
		case "GET":
			echo $rotina_get;
			break;
		case "POST":
			echo $rotina_post;
			break;
		case "PUT":
			echo $rotina_put;
			break;
		case "DELETE":
			echo $rotina_delete;
			break;
		default:
			echo "Metodo não permitido!";
	}
			$quantidade = 5;
	 while ($quantidade > 0)
	 {
	   echo "Quantidade ainda é maior que 0.\n";
			$quantidade--;
	}
	for ($i = 5; $i > 0; $i--) {
	  echo "Quantidade ainda maior q o tal do zero [for]\n";
	}
	  $frutas = ["maça", 'pera', 'kiwi', "banana"];
	  echo "\n";
	  for ($pos = 0;$pos < count($frutas); $pos++){
	  echo $frutas[$pos] . "!\n";
	  echo "\n\n";
	  }
	  $user = ["Numero" => "54...",  "Nome" => "Taylor"];
	  echo $user ['Nome'];
	  
	$linha1 = ["ID"=>"1",
	"qntd"=>"30",
	"ref"=>"cabo usb",
	"valor"=>"R$8"];
	
?>                                                              