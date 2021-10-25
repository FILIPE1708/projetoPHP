<?php

$json = '[{"Nome":"Filipe","Idade":"20"},{"Nome":"Jo\u00e3o","Idade":"21"}]';
json_decode($json, true);

var_dump($json);

?>