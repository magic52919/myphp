<?php
//shuffle (洗牌)
$poker = range(0, 51);
shuffle($poker);
// &spades;
// <font color='red'>&hearts;</font>;
// <font color='red'>&diams;</font>;
// &clubs;

foreach ($poker as $value) {
    //echo $value . '<br>';
}
echo '<hr>';
$players = array([], [], [], []);
foreach ($poker as $i => $card) {
    $players[$i % 4][(int) ($i / 4)] = $card;
}
?>
<table border="1" width="100%">
    <?php
    $suit = array("&spades;","<font color='red'>&hearts;</font>","<font color='red'>&diams;</font>","&diams;");
    $values = array('A',1,2,3,4,5,6,7,8,9,10,'J','Q','K');
    foreach($players as $player){
        sort($player);
        echo "<tr>";
        foreach ($player as $card) {
            echo "<td>";
            echo "{$suit[$card/13]}{$values[$card%13]}";
            echo "</td>";
        }
        echo "</tr>";
    }
    ?>


</table>