<?php

$images = scandir('images');

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array('.','..'))) {
        $fileName = 'images'. DIRECTORY_SEPARATOR . $img;
        $info = pathinfo($fileName);
        $info['size'] = filesize($fileName);
        $info['modified'] = date('d/m/y H:i:s', filemtime($fileName));
        $info['url'] = 'http://localhost/projetoPHP/DIR/' . str_replace('\\', '/', $fileName);

        array_push($data, $info);
    }
}

echo json_encode($data);

?>