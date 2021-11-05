<?php

$conn = new mysqli('localhost', 'root', '', 'db_php7');

if($conn->connect_error){
    echo 'Erro: ' . $conn->connect_error;
}

$stmt = $conn->prepare('INSERT INTO tb_usuarios (des_login, des_senha) VALUES (?, ?)');

$stmt->bind_param('ss', $login, $pass);
$login = 'user';
$pass = '12345';

$stmt->execute();

$login = 'root';
$pass = '@#$!';

$stmt->execute();
?>