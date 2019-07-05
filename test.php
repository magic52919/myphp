<?php
//防止執行超時
set_time_limit(0);
//清空並關閉輸出快取
ob_end_clean();
//需要迴圈的資料
for($i = 0; $i < 188; $i++)
{
  $users[] = 'Tom_' . $i;
}
//計算資料的長度
$total = count($users);
//顯示的進度條長度，單位 px
$width = 500;
//每條記錄的操作所佔的進度條單位長度
$pix = $width / $total;
//預設開始的進度條百分比
$progress = 0;
?>
<html>
<head>
<title>動態顯示伺服器執行程式的進度條</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
body,div input {
  font-family: Tahoma;
  font-size: 9pt
}
</style>
<script language="JavaScript">
 <!--
 function updateProgress(sMsg, iWidth)
 {
  document.getElementById("status").innerHTML = sMsg;
  document.getElementById("progress").style.width = iWidth + "px";
  document.getElementById("percent").innerHTML = parseInt(iWidth / <?php echo $width; ?> * 100) + "%";
  }
 -->
 </script>
</head>
<body>
  <div style="margin:50px auto; padding: 8px; border: 1px solid gray; background: #EAEAEA; width: <?php echo $width+8; ?>px">
    <div style="padding: 0; background-color: white; border: 1px solid navy; width: <?php echo $width; ?>px">
      <div id="progress"
        style="padding: 0; background-color: #FFCC66; border: 0; width: 0px; text-align: center; height: 16px"></div>
    </div>
    <div id="status"></div>
    <div id="percent"
      style="position: relative; top: -30px; text-align: center; font-weight: bold; font-size: 8pt">0%</div>
  </div>
<?php
flush(); //將輸出傳送給客戶端瀏覽器
foreach($users as $user)
{
  // 在此處使用空迴圈模擬較為耗時的操作，實際應用中需將其替換；
  // 如果你的操作不耗時，我想你就沒必要使用這個指令碼了 :)
  for($i = 0; $i < 1000000; $i++)
  {
  }
  ?>
<script language="JavaScript">
 updateProgress("正在操作使用者 <?php echo $user; ?> ....", <?php echo min($width, intval($progress)); ?>);
</script>
<?php
  flush(); //將輸出傳送給客戶端瀏覽器，使其可以立即執行伺服器端輸出的 JavaScript 程式。
  $progress += $pix;
} //end foreach
?>
<script language="JavaScript">
  //最後將進度條設定成最大值 $width，同時顯示操作完成
 updateProgress("操作完成！", <?php echo $width; ?>);
</script>
<?php
flush();
?>
</body>
</html>