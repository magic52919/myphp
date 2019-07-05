<?php
include_once 'sql.php';
if (isset($_REQUEST['cloneid'])) {
    $cloneid = $_REQUEST['cloneid'];
    $sql = "INSERT INTO product (pname,price)" .
        "SELECT pname,price from product where id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $cloneid);
    $stmt->execute();
    // echo $stmt->error;
} else if (isset($_REQUEST['deleteid'])) {
    $deleteid = $_REQUEST['deleteid'];
    $sql = "DELETE FROM product where id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $deleteid);
    $stmt->execute();
}

$page = isset($_GET['page'])?$_GET['page']:1;
$rpp =4;
$start = ($page-1) * $rpp;

$sql = "select * from product limit {$start},{$rpp}";
$result = $mysqli->query($sql);
?>
<script>
    function confirmDelete(pname){
        return confirm('Delete' + pname + '?');
    }
</script>
<a href='addproduct.php'>Add New Product</a>
<hr>
<table border="1" width="100%">
    <tr>
        <th>id</th>
        <th>pname</th>
        <th>price</th>
        <th>Edit/Delete/clone</th>
    </tr>
    <?php
    while ($product = $result->fetch_object()) {
        echo '<tr>';
        echo "<td>{$product->id}</td>";
        echo "<td><a href='showpimg.php?id={$product->id}'>{$product->pname}</td>";
        echo "<td>{$product->price}</td>";
        echo "<td>";
        echo "<a href='editproduct.php?editid={$product->id}'>Edit </a> |";
        echo "<a href='?deleteid={$product->id}' onclick='return confirmDelete(\"{$product->pname}\")'>Delete</a> |";
        echo "<a href='?cloneid={$product->id}'>clone</a>";
        echo "</td>";
        echo '</tr>';
    }
    ?>
</table>