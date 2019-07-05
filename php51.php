<?php
//$ch = curl_init("http://localhost/myphp/php52.php");

$ch = curl_init("localhost/myphp/php53.php");


$dataString = "id=2";
//如果不寫 都是GET

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
$ret = curl_exec($ch);
curl_close($ch);
$ret = json_decode($ret);
if ($ret->code == '200'){
    echo  $ret->product->pname . " : " . $ret->product->price;
}