<?php
$result = $x=$y='';
if (isset($_GET['x'])){//isset偵測某個變數有輸入才執行
    $x=$_GET['x'];$y=$_GET['y'];
   $result= (int)($x/$y).'.....'.($x%$y);
   
}


?>
<form action="php07.php">
<input type="text" name="x" value="<?php $x;?>">
/
<input type="text" name="y" value="<?php $y;?>">
<!-- 瀏覽器會預設submit -->
<input type="submit" value="=">   
</form> 
<!-- 與後端結合 -->
<?php
echo $result;

?>