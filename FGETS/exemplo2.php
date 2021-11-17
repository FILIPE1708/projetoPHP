<?php

$filename = 'PHP-image.png';
$base64 = base64_encode(file_get_contents($filename));
$fileInfo = new finfo(FILEINFO_MIME_TYPE);
$mimeType = $fileInfo->file($filename);

$base_encode =  'data:'.$mimeType.';base64,' . $base64;

?>

<a href="<?=$base_encode?>" target="_blank">Link para imagem</a>
<img src="<?=$base_encode?>" alt="">