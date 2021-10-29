<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
}

class CPF extends Documento{
    public function validar():bool{
        $cpf = $this->getNumero();

        //Verifica se o número foi informado
        if(empty($cpf)) return false;

        //Elimina possível mascara
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);

        //Verifica se o número de digitos informados é igual a 11
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        else if(preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        else{
            for ($t = 9; $t < 11; $t++) {

                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf[$c] * (($t + 1) - $c);
                }
                
                $d = ((10 * $d) % 11) % 10;
                if ($cpf[$c] != $d) {
                    return false;
                }
            }
        }
        return true;
    }
}

$doc = new CPF();
$doc->setNumero('753.317.377-57');
var_dump($doc->validar());
echo '<br>';
echo $doc->getNumero();

?>