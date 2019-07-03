<?php
$mystr = 'abc';
$filename = 'a';

$pos = strpos($mystr,$filename);
if ($pos !==false){
    echo 'find';
}else{
    echo 'not';
}