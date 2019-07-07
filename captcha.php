<?php
 if(!isset($_SESSION)){ session_start(); }
 $_SESSION['check_word'] = ''; 


$nums=4; 
$width=$nums*50;  
$high=30;  
$str = "23456789abcdefghijkmnpqrstuvwxyzABCDEFGHIJKLMOPQRSTUBWXYZ";
$code = '';
for ($i = 0; $i < $nums; $i++) {
$code .= $str[rand(0, strlen($str)-1)];
}
$_SESSION['check_word'] = $code;

$img = imagecreate($width, $high);

$black = imagecolorallocate($img, 0, 0, 0);  
$white = imagecolorallocate($img, 255, 255, 255); 

imagettftext($img,15,rand(0,60),rand(10,40),rand(20,25),$white,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",substr($code, 0, 1));
imagettftext($img,15,rand(0,60),rand(50,80),rand(20,25),$white,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",substr($code, 1, 1));
imagettftext($img,15,rand(0,60),rand(90,130),rand(20,25),$white,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",substr($code, 2, 1));
imagettftext($img,15,rand(0,60),rand(140,180),rand(20,25),$white,"C:/xampp/htdocs/PHP/myphp/ExtraLight.otf",substr($code, 3, 1));

header("Content-type: image/jpeg");
imagejpeg($img);

imagedestroy($img); 
?>