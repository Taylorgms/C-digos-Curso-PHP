<?php

class Predios {
private $nome;
private $altura;
private $largura;
private $andar;
private $qtd_apt;

        // Getter e Setter Nome
        public function getNome() {
            return $this->nome;
        }
    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

        // Getter e Setter Altura
        public function getAltura() {
            return $this->altura;
        }
    public function setAltura($altura) {
        $this->altura = $altura;
        return $this;
    }

        // Getter e Setter Largura
        public function getLargura() {
            return $this->largura;
        }
    public function setLargura($largura) {
        $this->largura = $largura;
        return $this;
    }

        // Getter e Setter Andar
        public function getAndar() {
            return $this->andar;
        }
    public function setAndar($andar) {
        $this->andar = $andar;
        return $this;
    }

        // Getter e Setter Quantidade de Apartamentos
        public function getQtd_Apt() {
            return $this->qtd_apt;
        }
    public function setQtd_Apt($qtd_apt) {
        $this->qtd_apt = $qtd_apt;
        return $this;
    }
}

?>