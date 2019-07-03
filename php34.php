<?php
if(!isset($_REQUEST['filename'])) die('get out');
$file = $_REQUEST['filename'];
$content = $_REQUEST['content'];

$fp = @fopen("./dir1/{$file}",'w');
if(@fwrite($fp, $content)){
header("Location: dir1/{$file}");
}else{
echo 'error';
}

// fflush($fp);
// fclose($fp);