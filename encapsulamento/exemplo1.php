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

$objeto = new Pessoa();
//echo $objeto->senha . '<br>';

$objeto->verDados();

?>