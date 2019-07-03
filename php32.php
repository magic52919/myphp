<?php

$content = file('./dir1/files.txt');
var_dump($content);
foreach($content as $k => $line){
    echo $line;
}