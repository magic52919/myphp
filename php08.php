<?php
$score = 2019;

if($score%400==0){
    echo "閏年";
}else if($score%100==0){  
   echo "非閏年";
}else if($score%4==0){  
echo "閏年";
}else {
    echo "非閏年";
}


?>
