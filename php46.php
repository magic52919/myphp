<?php
$mysqli = new mysqli('localhost','root','','cy');
//回傳0為成功
// echo $mysqli->connect_errno;
//設定編碼
$mysqli->set_charset('utf8');
// $sql = 'delete from cust where id=3';
//$sql = 'INSERT INTO cust (cname,tel,birthday) values ("magic","2323","1994-11-08")';
// $sql .= ',("cy1","2323","1994-11-08")';
// $sql .= ',("cy2","2323","1994-11-08")';

$name = 'mmmm';
$tel = '123567';
$birthday = '0123-02-12';

$sql = 'INSERT INTO cust (cname,tel,birthday) values (?,?,?)';


$stmt= $mysqli->prepare($sql);//$stmt is a object of mysqli_stmt 只是準備而已

$stmt->bind_param('sss',$name,$tel,$birthday);//綁定參數方式 解決隱碼攻擊
$stmt->execute();
echo $stmt->affected_rows;//幾筆資料受到影響
echo $mysqli->error;