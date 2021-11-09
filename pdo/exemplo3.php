<?php

$conn =  new PDO('mysql:dbname=db_php7; host:localhost', 'root','' );
$stmt = $conn->prepare('INSERT INTO tb_usuarios(des_login, des_senha) VALUES (:LOGIN, :PASSWORD)');

$login = 'Filipe';
$password = '3456788';

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $password);

$stmt->execute();
echo 'Inserido com sucesso!!';

?>