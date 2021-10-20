<?php

$nome = 'Filipe';

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    echo '<br>';
    $nome = 'João';
    echo $nome . 'Teste 2';
}

teste();
teste2();
?>