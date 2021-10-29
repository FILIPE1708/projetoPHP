<?php

require_once('config.php');
use Cliente\Cadastro;

$cad = new Cadastro();
$cad->setNome('Filipe Cavalcante');
$cad->setEmail('filipe@email.com.br');
$cad->setSenha('123321');
$cad->registrarVenda();

?>