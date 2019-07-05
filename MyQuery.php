<?php
class MyQuery{
    private $mysqli;
    const query_pname = 'pname';
    const query_price = 'price';
    function __construct($mysqli){
        $this->mysqli = $mysqli;
    }
    function getfield($pid,$field){
        $sql = "select * from product where id = {$pid}";
        $result = $this->mysqli->query($sql);
        if($result->num_rows == 0){
            return false;
        }else {
            $product = $result->fetch_assoc(); //array
            return $product[$field];
        }
    }
}
