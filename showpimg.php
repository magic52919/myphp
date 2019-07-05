<?php
if(isset($_REQUEST['id'])) header('Location: bmail.php');
$id = $_REQUEST['id'];
for ($i=1;$i<=5;$i++){
    $pfile = "pimgs/p_{$id}_{$i}.jpg";
    if(file_exists($pfile)){
        echo "<img scr='{$pfile}'>";
    }
}