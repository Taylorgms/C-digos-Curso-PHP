<?php

class Usuarios {

    private $nome;
    private $senha;
    private $email;
    private $telefone;
    
    // Getter e Setter Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    // Getter e Setter Descrição
    public function getsenha() {
        return $this->senha;
    }

    public function setsenha($senha) {
        $this->senha = $senha;
        return $this;
    }

    // Getter e Setter Gênero
    public function getemail() {
        return $this->email;
    }

    public function setemail($email) {
        $this->email = $email;
        return $this;
    }

    // Getter e Setter Quantidade de Folhas
    public function gettelefone() {
        return $this->telefone;
    }

    public function settelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

}

?>