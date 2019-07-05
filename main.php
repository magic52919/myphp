<?php
spl_autoload_register(function ($class_name) {
    require_once "{$class_name}.php";
});
include_once 'sql.php';
session_start();
if(!isset($_SESSION['member'])) header('Location: login.php');
$member = $_SESSION['member'];
$cart = $_SESSION['cart'];
$icon = base64_encode($member->icon);
$page = isset($_GET['page'])?$_GET['page']:1;
$rpp =10;
$start = ($page-1) * $rpp;

$sql = "select * from product limit {$start},{$rpp}";
$result = $mysqli->query($sql);
?>

<h1>CY big Company</h1>
<hr>
Welcome, <?php echo $member->realname;?><br>
<img src='data:image/jpeg;base64, <?php echo $icon;?>'>
<a href="logout.php">logout</a><br>
<hr>
<table border="1" width="100%" >
    <tr>
        <th width="10%">id</th>
        <th width="15%">pname</th>
        <th width="15%">price</th>
        <th width="15%">數量</th>
    </tr>
    <?php
    while ($product = $result->fetch_object()) {
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
       
        echo "<td>";
        echo "<input type='number' name='{$product->id}'>";
        echo '樣';
        echo "</td>";
        echo '</tr>';
    }
    ?>
</table>
<hr>
2019 Copyright. Power By CY corp.