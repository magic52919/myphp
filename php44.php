<?php
include_once 'phpid.php';
session_start();

$var1 = $_SESSION['var1'];
echo "var1 = {$var1->sum()} avg = {$var1->avg()}";

?>