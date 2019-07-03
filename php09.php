<?php
$result = $x=$y=$var='';

if (isset($_GET['x'])){//isset偵測某個變數有輸入才執行
    $x=$_GET['x'];$y=$_GET['y'];$var = $_GET['op'];
    if ($var==1)$result = $x+$y;
    if ($var==2)$result = $x-$y;
    if ($var==3)$result = $x*$y;
    if ($var==4)$result= (int)($x/$y).'.....'.($x%$y);
}


?>
<form action="php09.php">
<input type="text" name="x" value="<?php $x;?>">
<select name="op" id="">
<option value="1" <?php if($var==1) echo 'selected'?>>+</option>
<option value="2" <?php if($var==2) echo 'selected'?>>-</option>
<!-- selected預設值 -->
<option value="3" <?php if($var==3) echo 'selected'?>>X</option>
<option value="4" <?php if($var==4) echo 'selected'?>>/</option>

</select>
<input type="text" name="y" value="<?php $y;?>">
<!-- 瀏覽器會預設submit -->
<input type="submit" value="=">   
</form> 
<!-- 與後端結合 -->
<?php
echo $result;

?>