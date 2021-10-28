<?php

class Documento{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $resultado = Documento::validarCPF($numero);
        if ($resultado === false){
            throw new Exception('CPF invalido', 1);
        }

        $this->numero = $numero;
    }

    static function validarCPF($cpf):bool{
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

$cpf = new Documento;
$cpf->setNumero('618.333.218-63');
var_dump($cpf->getNumero());
echo '<br>';
var_dump(Documento::validarCPF('618.333.218-63'));

?>