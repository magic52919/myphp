<?php
sayYa();sayYa();
sayHello('jiejeoi');
sayHelo();
sayHelo('ssss');
$name = ['sdsds','xxxx','ccccc','vvvvv'];
sayHe($name);
sayHe('ssss');
sayH();
sayH(1,3,4);
sayH('name',3,4);
function sayYa(){
    echo "YAYA<br>";
}

function sayHello($name){
    echo "hello,$name<br>";
}
function sayHelo($name = 'worlud'){
    echo "hello,$name<br>";
}
//兩個預設值以前面為優先
function sayHel($n=1,$name = 'worlud'){
    for($i=0;$i<$n;$i++){
        echo "hello,$name<br>";
    }
}
function sayHe($name){
    if(is_array($name)){
        foreach($name as $names){
            echo "$names<br>";
        }
    }else{
        echo "hello,$name<br>";
    }
}
function sayH(){
    $n=func_get_args();
    foreach($n as $value){
        echo "$value<br>";
    }
}