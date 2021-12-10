<?php

$data = array(
    "Empresa" => "Cod.PHP"
);
setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
echo("Cookie Criado");

?>