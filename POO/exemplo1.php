<?php

class Pessoa{
    public $nome; //Atributo

    public function falar(){ //Método
        return 'Meu nome é ' . $this->nome;
    }
}

$pessoa = new Pessoa();
$pessoa->nome = 'Filipe Cavalcante';
echo $pessoa->falar();

?>