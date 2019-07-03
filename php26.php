<?PHP

foreach($_REQUEST as $k =>$v){
    if(is_array($v)){
        foreach ($v as $key => $value) {
            echo "$key => $value<br>";
        }
    }else{
        echo " $k => $v<br>";
    }
}


?>