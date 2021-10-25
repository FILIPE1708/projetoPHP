<?php

$qualIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualIdade <= $idadeCrianca){
    echo 'É uma criança';
}

else if($qualIdade < $idadeMaior){
    echo 'É um adolecente';
}

else if($qualIdade < $idadeMelhor){
    echo 'É um adulto';
}

else{
    echo 'É um idoso';
}

echo '<br>';
echo ($qualIdade < $idadeMaior)? 'Menor de idade' : 'Maior de idade';

?>