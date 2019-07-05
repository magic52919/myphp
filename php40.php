<?php

$img = imagecreatefromjpeg("./coffee.jpg");

$yellow = imagecolorallocate($img,255,255,0);
// imagefilledrectangle($img,0,0,400,20,$yellow);
imagettftext($img,36,45,100,200,$yellow,"C:/xampp/htdocs/myphp/ExtraLight.otf","xxxx");

header("Content-type: image/jpeg");
imagejpeg($img);

imagedestroy($img);