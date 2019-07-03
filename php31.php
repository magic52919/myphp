<?php
//w  原資料會被清掉全部重寫
$fp = @fopen('./dir1/files.txt','W');
fwrite($fp, "Hellom, world\nwdwdwd\ndwdwdwdw");//'' 不解弈跳脫字元
fflush($fp);
fclose($fp);