<?php

class Livros {

    private $nome;
    private $descricao;
    private $genero;
    private $quant_folhas;
    private $classificacao;

    // Getter e Setter Nome
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    // Getter e Setter Descrição
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
        return $this;
    }

    // Getter e Setter Gênero
    public function getGenero() {
        return $this->genero;
    }

    public function setGenero($genero) {
        $this->genero = $genero;
        return $this;
    }

    // Getter e Setter Quantidade de Folhas
    public function getQuant_folhas() {
        return $this->quant_folhas;
    }

    public function setQuant_folhas($quant_folhas) {
        $this->quant_folhas = $quant_folhas;
        return $this;
    }

    // Getter e Setter Classificação
    public function getClassificacao() {
        return $this->classificacao;
    }

    public function setClassificacao($classificacao) {
        $this->classificacao = $classificacao;
        return $this;
    }
}

?>