<?php

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

//Caso tenha problema para utilizar a fonte no imagettftext utilize o caminho absoluto como no exemplo
$font = "C:/xampp/htdocs/projetoPHP/GD/fonts/Bevan/Bevan-Regular.ttf";
$font2 = "C:/xampp/htdocs/projetoPHP/GD/fonts/Playball/Playball-Regular.ttf";

imagettftext($image, 32, 0, 320, 250, $titleColor, $font,"Certificado");
imagettftext($image, 32, 0, 375, 350, $titleColor, $font2, "Filipe Cavalcante");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);

header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image); 

?>