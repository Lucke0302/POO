<?php
class Carro{
    public $cor;
    public $tipo;
    public $quilometragem;
    public $modelo;

    public function __construct($cor, $tipo, $quilometragem, $modelo)
    {
        $this->cor = $cor;
        $this->tipo = $tipo;
        $this->quilometragem = $quilometragem;
        $this->modelo = $modelo;        
    }

    public function setQuilometragem(){
        $this->quilometragem += 1;
    }

    public function getQuilometragem(){
        return $this->quilometragem;
    }
}