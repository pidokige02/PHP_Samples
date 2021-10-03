<?php
    header("Content-type: image/png");
    $string = $_GET['text'];
    $im     = imagecreatefrompng("button.png");
    $orange = imagecolorallocate($im, 60, 87, 156);  // r,g,b
    $px     = (imagesx($im) - (7.5 * strlen($string))) / 2;  //x 죄표 위치
    imagestring($im, 4, $px, 9, $string, $orange);
    imagepng($im);  // png image 를 client 로 전송한다.
    imagedestroy($im);    
?>