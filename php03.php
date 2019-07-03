<?php
$var1 = 1; //$[a-zA-Z$_][a-zA-Z0-9$_]*
//$變數或$_變數都可以  不能$$$
echo gettype($var1).'<br>';
$var1 = 10 ; $var2 = 3;
echo ($var1 / $var2).'<br>'; //弱形別運算

echo (int)($var1 / $var2).'<br>';
$var5 = 012; //0 -> 8進位 
echo $var5.'<br>';
$var6 = 0x12; // 16進位
echo $var6.'<br>';
$var7 = 10;

$var8 = ++$var7;
$var9 = $var7++;
echo "{$var7}:{$var8}:{$var9}".'<br>'
?>