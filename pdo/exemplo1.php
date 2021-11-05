<?php

$conn =  new PDO('mysql:dbname=db_php7; host:localhost', 'root','' );

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