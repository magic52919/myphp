<?php
if (!isset($_FILES['upload'])) exit(0);
$upload = $_FILES['upload'];
foreach ($upload as $key => $value) {
    echo "$key => $value<br>";
}
if ($upload['error'] == 0) {
    if (copy($upload['tmp_name'], "up/{$upload['name']}")) {
        echo 'upload success';
    }else{
        echo 'upload fa';
    }
// if ($is_upload_file['error'] == 0) {
//     if (move_upload_file($upload['tmp_name'], "up/{$upload['name']}")) {
//         echo 'upload success';
//     }else{
//         echo 'upload fa';
//     }
// }
}else{
    echo 'oops';//阿帕契失敗
}
//移動move_upload_file
//檔案大小 upload_max_filesize
//網頁error code(0)為無錯誤
//$upload陣列
//echo $? 上一道執行
