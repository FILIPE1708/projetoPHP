<?php

class Pessoa{
    public $nome = 'Filipe Cavalcante';
    protected $idade = 20;
    private $senha = '1234';

    public function verDados(){
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha;
    }
}

class Programador extends Pessoa{
    public function verDados(){
        echo get_class($this) . '<br>';
        echo $this->nome . '<br>';
        echo $this->idade . '<br>';
        echo $this->senha;
    }
}

$objeto = new Programador();
//echo $objeto->senha . '<br>';

$objeto->verDados();

?>