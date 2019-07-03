<?php
//LAB1 題目 
//LAB2 題目質數黃底
//LAB3 題目撲克牌V3版換牌

?>
<table border='1' width='100%'>
        <?php
        $row = $_GET['row'];
        $nTd = $_GET['nTd'];
        if(!$row)$row=3;
        if(!$nTd)$nTd=3;
        for($z=0;$z<$row;$z++){
            echo "<tr>";
            for ($j = 2; $j < (2+$nTd); $j++) {
                $new = $j+$z*$nTd;
                $ispink = '';
                if($nTd %2 ==0){
                    $ispink = ($new + $z)%2==0;
                }else{
                    $ispink = ($new)%2==0;
                }
                echo "<td bgcolor='".($ispink?"pink":"yellow")."'>";
                for ($i = 1; $i < 10; $i++) {
                    $r = $new * $i;
                    echo "{$new} X {$i} ={$r}<br>";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
       

        ?>
</table>