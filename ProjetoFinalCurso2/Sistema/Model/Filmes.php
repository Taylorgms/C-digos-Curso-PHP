<?php

class Filmes {

    private $titulo;
    private $ano;
    private $genero;
    private $classificacao_indicativa;
    private $diretor;
    private $sinopse;
    private $pessoa_alugante;
    private $status;

    // Getter e Setter Titulo
    public function gettitulo() {
        return $this->titulo;
    }

    public function settitulo($titulo) {
        $this->titulo = $titulo;
        return $this;
    }

    // Getter e Setter Ano
    public function getano() {
        return $this->ano;
    }

    public function setano($ano) {
        $this->ano = $ano;
        return $this;
    }

    // Getter e Setter Genero
    public function getgenero() {
        return $this->genero;
    }

    public function setgenero($genero) {
        $this->genero = $genero;
        return $this;
    }

    // Getter e Setter Classificacao indicativa
    public function getclassificacao_indicativa() {
        return $this->classificacao_indicativa;
    }

    public function setclassificacao_indicativa($classificacao_indicativa) {
        $this->classificacao_indicativa = $classificacao_indicativa;
        return $this;
    }

    // Getter e Setter Diretor
    public function getdiretor() {
        return $this->diretor;
    }

    public function setdiretor($diretor) {
        $this->diretor = $diretor;
        return $this;
    }

    // Getter e Setter Sinopse
    public function getsinopse() {
        return $this->sinopse;
    }

    public function setsinopse($sinopse) {
        $this->sinopse = $sinopse;
        return $this;
    }

    // Getter e Setter Pessoa alugante
    public function getpessoa_alugante() {
        return $this->pessoa_alugante;
    }

    public function setpessoa_alugante($pessoa_alugante) {
        $this->pessoa_alugante = $pessoa_alugante;
        return $this;
    }

    // Getter e Setter Status
    public function getstatus() {
        return $this->status;
    }

    public function setstatus($status) {
        $this->status = $status;
        return $this;
    }
}

?>
