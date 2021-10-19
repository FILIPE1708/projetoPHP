<?php

$anoNascimento = 2001;
$nome1 = 'Filipe';
$sobrenome = 'Cavalcante';
$nomeCompleto = $nome1 + $sobrenome;

echo $nome1;
echo '<br>';
unset($nome1);

if(isset($nome1)){
    echo $nome1;
}

?>