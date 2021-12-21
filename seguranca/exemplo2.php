<?php

$id = isset($_GET["id"]) ? $_GET["id"] : 4;

if (!is_numeric($id) || strlen($id) > 5) {
    exit("Pegamos você!!");
}

$conn = new mysqli('localhost', 'root', '', 'db_php7');
$sql = "SELECT * FROM tb_usuarios WHERE id_usuario = $id";
$exec = mysqli_query($conn, $sql);

while ($resultado = mysqli_fetch_object($exec)) {
    print_r(json_encode($resultado));
}

?>