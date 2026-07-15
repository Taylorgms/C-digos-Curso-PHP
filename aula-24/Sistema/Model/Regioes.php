<?php

    class Regioes{

        private $PEC;
        private $pais;
        private $estado;
        private $cidade;

        //GETTERS
        public function getPEC(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->PEC;

        }

        public function getPais(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->pais;

        }

        public function getEstado(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->estado;

        }

        public function getCidade(){

            //Se refere a propria variavel no codigo e retorna o valor dela
            return $this->cidade;

        }


        //SETTERS
        public function setPEC($PEC) : self{

            $this->PEC = $PEC;
            return $this;

        }

        public function setPais($pais) : self{

            $this->pais = $pais;
            return $this;

        }

        public function setEstado($estado) : self{

            $this->estado = $estado;
            return $this;

        }

        public function setCidade($cidade) : self{

            $this->cidade = $cidade;
            return $this;

        }


    }

?>