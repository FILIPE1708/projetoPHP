<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function validarCPF($cpf){
        //Verifica se o número foi informado
        if(empty($cpf)) return false;

        //Elimina possível mascara
        $cpf = preg_replace('[^0-9]', '', $cpf);
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
    }
}

$cpf = new Documento;
$cpf->setNumero('321.123.865-45');
var_dump($cpf->getNumero());

?>