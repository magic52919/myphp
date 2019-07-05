<?php
//model引用
function processdata(){
    $data['title']= 'xxxxxxxx';
    $data['who']= 'yyyyyy';
    return $data;
}

//call view
function loadview($viewfile,$data){
    $query = http_build_query(array("data" => $data));
   echo file_get_contents("http://localhost/views/{$viewfile}.php?{$query}");
}
$data = processdata();
loadview('view1',$data);