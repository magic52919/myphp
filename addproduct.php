<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<?php
include_once 'sql.php';
if (isset($_REQUEST['pname'])) {
    $pname = $_REQUEST['pname'];
    $price = $_REQUEST['price'];
    $sql = "INSERT INTO product (pname,price) VALUES ('{$pname}',{$price})";
    $mysqli->query($sql);
    $newid = $mysqli->insert_id;
    if (isset($_FILES['pimg'])) {
        $pimg = $_FILES['pimg'];
        $n = 1;
        foreach ($pimg['error'] as $i => $errno) {
            if ($errno == 0) {
                copy($pimg['tmp_name'][$i], "pimgs/p_{$newid}_{$n}.jpg");
                echo "pimgs/p_{$newid}_{$n}.jpg";
                $n++;
            }
        }
    }
    header('Location: bmain.php');
}
?>


<form action="addproduct.php" method="post" enctype='multipart/form-data'>
    Pname: <input type="text" name="pname"><br>
    Price: <input type="number" name="price"><br>
    Pimage1: <input type="file" name="pimg[]"><br>
    Pimage2: <input type="file" name="pimg[]"><br>
    Pimage3: <input type="file" name="pimg[]"><br>
    Pimage4: <input type="file" name="pimg[]"><br>
    Pimage5: <input type="file" name="pimg[]"><br>
    <input type="submit" value="Add">
</form>