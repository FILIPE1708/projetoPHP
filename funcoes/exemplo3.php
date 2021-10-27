<?php

function ola($texto = 'mundo', $periodo = 'Bom dia'){
    return "Olá $texto <br> $periodo <br>";
}

echo ola();
echo ola('', 'Boa noite');
echo ola('Filipe', 'Boa tarde');

?>