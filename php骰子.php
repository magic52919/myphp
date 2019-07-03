<?php
$a=array(1 =>0,0,0,0,0,0);


for ($i=0;$i<1000;$i++){
    $b = rand(1,6);
    $a[$b]++;
}

echo $a[1].'<br>';
echo $a[2].'<br>';
echo $a[3].'<br>';
echo $a[4].'<br>';
echo $a[5].'<br>';
echo $a[6].'<br>';
foreach($a as $key =>$value){
    echo "$key 有 $value 個".'<br>';
}