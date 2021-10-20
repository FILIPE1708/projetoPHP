<?php
$nome = 'Filipe';
$site = 'www.curso.com.br';

$ano = 2001;
$salario = 10999.99;
$bloqueado = false;
////////////////////////////////////
$frutas =  array('Abacaxi', 'Laranja', 'Manga');
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);
//////////////////////////////////
$arquivo = fopen('exemplo3.php', 'r');
var_dump($arquivo);

$nulo = NULL;
$vazio = '';
?>