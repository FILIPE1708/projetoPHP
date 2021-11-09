<?php

$conn =  new PDO('mysql:dbname=db_php7; host:localhost', 'root','' );
$conn->beginTransaction();

$stmt = $conn->prepare('DELETE FROM tb_usuarios WHERE id_usuario = ?');

$id = 2;

$stmt->execute(array($id));
//$conn->rollBack();
$conn->commit();
echo 'Dados excluidos com sucesso!!';

?>