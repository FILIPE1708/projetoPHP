<?php

$conn =  new PDO('mysql:dbname=db_php7; host:localhost', 'root','' );
$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE id_usuario = :ID');

$id = 1;
$stmt->bindParam(':ID', $id);

$stmt->execute();
echo 'Dados excluidos com sucesso!!';

?>