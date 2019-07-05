<?php
spl_autoload_register(function ($class_name) {
    require_once "{$class_name}.php";
});
session_start();
if(!isset($_SESSION['member'])) header('Location: login.php');
$member = $_SESSION['member'];
$cart = $_SESSION['cart'];
$icon = base64_encode($member->icon);
?>


<h1>CY big Company</h1>
<hr>
Welcome, <?php echo $member->realname;?><br>
<img src='data:image/jpeg;base64, <?php echo $icon;?>'>
<a href="logout.php">logout</a><br>
<hr>

<hr>
2019 Copyright. Power By CY corp.