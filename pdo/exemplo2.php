<?php

$conn =  new PDO('sqlsrv:Database=db_php7; server:localhost\SQLEXPRESS; ConnectionPooling=0', 'sa','345473' );

$stmt = $conn->prepare('SELECT * FROM tb_usuarios ORDER BY des_login');

$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo '<strong>'. $key .':</strong>' . $value . '<br>';
        
    }

    echo '<hr>';
}

?>