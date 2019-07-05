<?php
$data = $_GET['data'];
foreach($data as $key => $value){
    //echo $key; $key = title $$key = $title
    $$key = $value;
}
?>


<h1 sty><?php echo $title?></h1>
<hr>
<?php echo $who?>
<hr>
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx