<?php

$pessoas = array();

array_push($pessoas, array(
    'Nome' => 'Filipe',
    'Idade' => '20'
));

array_push($pessoas, array(
    'Nome' => 'João',
    'Idade' => '21'
));

print_r($pessoas[0]['Nome']);

?>