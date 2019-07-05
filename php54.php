<?php
spl_autoload_register(function ($class_name) {
    require_once "{$class_name}.php";
});
include_once 'sql.php';

$mysqery = new MyQuery($mysqli);
$var1 = $mysqery->getfield(1,MyQuery::query_pname);
$var2 = $mysqery->getfield(1,MyQuery::query_price);
echo $var1;