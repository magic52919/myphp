<?php
$poker = [];
for ($i = 0; $i < 52; $i++) {
    $poker[$i] = $i;    
}
for ($i = 51; $i > 0; $i--) {
    $rand = rand(0,$i);
    [$poker[$i],$poker[$rand]] = [$poker[$rand],$poker[$i]];
}
foreach($poker as $value){
    echo $value . '<br>';
}

