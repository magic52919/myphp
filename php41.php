<?php
//LAB 圖形驗證
//等比例縮放
$dstw = 240;
$dsth = 240;

$src = imagecreatefromjpeg("./coffee.jpg");
$srcw = imagesx($src);
$srcH = imagesy($src);

if($srcw > $srcH){
    $dstx=240;
    $dsty = (240*$srcH/$srcw);
}else{
    $dsty=240;
    $dstx = (240*$srcw/$srcH);
}

$dst = imagecreate($dstx, $dsty);

imagecopyresized($dst,$src,0,0,0,0,$dstx,$dsty,$srcw,$srcH);
imagecopyresampled($dst,$src,0,0,0,0,
    $dstx,$dsty,
    $srcw,$srcH
);

//  header("Content-type: image/jpeg");
// imagejpeg($dst,"../dir1/nee.jpg");
imagedestroy($src);
imagedestroy($dst);
