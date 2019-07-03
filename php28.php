<?php
date_default_timezone_set('Asia/taipei'); //時區
$fp = @opendir('.') or exit('sp');
while ($file = readdir($fp)){ //先asign 在判斷
    if(is_dir("./$file"))$d='目錄';
    if(is_file("./$file"))$d='檔案';
    $len = filesize("./$file"); //檔案大小
    $mtime = filemtime("./$file"); //時間戳記
    $ntime = date('Y-m-d H:i:s',$mtime);
    echo "{$file}..{$d}.....{$len}...{$ntime}<br>";
}

if(unlink("./xxx")){//砍檔案命令劣執行
    echo 'zzzz';
}else{
    echo 'vvvvv';
}
