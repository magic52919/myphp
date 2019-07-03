<?php
include_once 'phpid.php';
$twid = creatwid(false);
echo $twid.'<br>';
if(isTwid($twid)){
    echo 'OK';
}else{
    echo 'XX';
}

?>