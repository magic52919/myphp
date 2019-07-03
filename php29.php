<?php
//後端程式 3P php asp jsp 只有php可以直接跑在命令列
$fp = @opendir('.') or exit('sp');
while ($file = readdir($fp)){ //先asign 在判斷
    if(is_dir("./$file"))$d='目錄';
    if(is_file("./$file"))$d='檔案';
    $len = filesize("./$file"); //檔案大小
    $mtime = filemtime("./$file"); //時間戳記
    $ntime = date('Y-m-d H:i:s',$mtime);
    echo "{$file}..{$d}.....{$len}...{$ntime}\n";//<br>網頁 \n命令列
} 
if(@mkdir('dir1')){
    echo 'mkdir ok';
}else{
    echo 'mkdir XXX';
}

