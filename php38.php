<?php
//1.canvas (new)
//2.process
//3.output => 1.display or 2.export to file
//4.free memory
// $rate = $_GET['rate'];

$img = imagecreatetruecolor(400,50);

$yellow = imagecolorallocate($img,255,255,0);
imagefilledrectangle($img,0,0,400,50,$yellow);
$red = imagecolorallocate($img,255,0,0);
// imagefilledrectangle($img,0,0,$rate*400/100,20,$red);
$t = rand(0,9);
imagettftext($img,25,rand(0,72),rand(10,40),rand(25,45),$red,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",$t);
imagettftext($img,25,rand(0,72),rand(50,90),rand(25,45),$red,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",$t);
imagettftext($img,25,rand(0,72),rand(100,130),rand(25,45),$red,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",$t);

header("Content-type: image/jpeg");
imagejpeg($img);

imagedestroy($img);?>
<input type="text" value="123">