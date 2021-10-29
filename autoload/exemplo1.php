<?php

spl_autoload_register(function ($nomeClasse) {
    //var_dump($nomeClasse);
    include $nomeClasse . '.php';
});

$carro = new DelRey();
echo $carro->acelerar(80);

?>