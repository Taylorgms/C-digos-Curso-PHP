<?php 
class Carro{
    public function Buzinar(){
        echo "Piiiiiiiiiiiii";
    }
     public function Ligando($carro){
        if($carro == "Desligado"){  
            echo "Liguei cpx"; 
            return "Ligado"; 
            }
            else{ 
                echo "Ja estou Ligado!";
            }
    }
    
    public function Desligando($carro){
        if ($carro == "Ligado"){  echo "Desliguei cpx";  return "Desligado"; }
        else{ echo "Ja estou Desligado!";}
       
    }
}
?>