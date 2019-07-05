<?php
//也可以在組態黨裡面改
//php.ini session.auto.start
include_once 'phpid.php';
session_start();
$var1 = new student(80,817,99);
$sum = $var1->sum(); $avg = $var1->avg();

echo "sum : {$var1->sum()} avg : {$var1->avg()}";
$_SESSION['var1'] = $var1;
$var1->setch(9);
?>


<a href='php44.php'>next</a>
