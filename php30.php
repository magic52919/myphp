<?php
//r+ 檔案不存在不會寫  W+ 檔案不存在會寫
$fp = @fopen('http://big5.quanben.io/n/wangzhexitong/398.html','r');
//fgetc 1次讀1個字元
//fgets 1次讀1個列
$i=1;
while($c = fgets($fp)){
    if (preg_match('/href/',$c)){
echo $c;
    }
    

}
fclose($fp);
