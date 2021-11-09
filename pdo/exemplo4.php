<?php

$conn =  new PDO('mysql:dbname=db_php7; host:localhost', 'root','' );
$stmt = $conn->prepare('UPDATE tb_usuarios SET des_login = :LOGIN, des_senha = :PASSWORD WHERE id_usuario = :ID');

$id = 2;
$login = 'Milena';
$password = '1327899';

$stmt->bindParam(':LOGIN', $login);
$stmt->bindParam(':PASSWORD', $password);
$stmt->bindParam(':ID', $id);

$stmt->execute();
echo 'Dados alterados com sucesso!!';

?>