<?php
//方程式裡面的變數只是變數並不是外部的數值
function fx($x){
    return 2*$x+1;
}
$var = fx(3);
echo $var;