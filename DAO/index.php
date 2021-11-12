<?php

require_once('config.php');

/*$sql = new Sql;
$user = $sql->select('SELECT * FROM tb_usuarios');
echo json_encode($user);

//Carrega um usuário
/*$root = new Usuario();
$root->loadById(3);
echo $root;*/

//Carrega uma lista de usuários 
/*$lista = Usuario::getList();
echo json_encode($lista);*/

//Carrega uma lista de usuários buscando pelo login
/*$busca = Usuario::searchList('ro');
echo json_encode($busca);*/

//Carrega o usuário se o login e a senha estiverem corretos
$login = new Usuario();
$login->login('Filipe', '3456788');
echo ($login);

?>