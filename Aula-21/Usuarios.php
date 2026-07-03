<?php

class Usuarios {

    private $nome;
    private $idade;
    private $email;
    private $altura;
    private $peso;
    private $signo;

    // Getter e Setter Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    // Getter e Setter Idade
    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
        return $this;
    }

    // Getter e Setter Email
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
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

    // Getter e Setter Peso
    public function getPeso() {
        return $this->peso;
    }

    public function setPeso($peso) {
        $this->peso = $peso;
        return $this;
    }

    // Getter e Setter Signo
    public function getSigno() {
        return $this->signo;
    }

    public function setSigno($signo) {
        $this->signo = $signo;
        return $this;
    }

}

?>