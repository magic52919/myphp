<?php
//自動引入沒有的php
spl_autoload_register(function ($class_name) {
    require_once "{$class_name}.php";
});
$obj1 = new cart;
$obj1->addproduct('p001',30);
$list = $obj1->getall();
var_dump($list);
$obj2 = new myclass2;


