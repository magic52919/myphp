<?php
spl_autoload_register(function ($class_name) {
    require_once "{$class_name}.php";
});
include_once 'sql.php';
session_start();
if(!isset($_REQUEST['account'])) header('Location: login.php');
$account = $_REQUEST['account'];
$passwd = $_REQUEST['passwd'];

$sql = "select * from member where account = ?";
$stmt= $mysqli->prepare($sql);
$stmt->bind_param('s',$account);
$stmt->execute();

$result = $stmt->get_result();
if($result->num_rows >0){
    //check passwd
    $member = $result->fetch_object();
    if(password_verify($passwd,$member->passwd)){
        $_SESSION['member'] = $member;
        $_SESSION['cart'] = new cart;
        header("Location: main.php");
    }else{
        header("Location: login.php");

    }
}else{
    //no account
    header("Location: login.php");
}