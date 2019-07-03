<?php
$n = '';
if (isset($_GET['n'])) {
    $n = $_GET['n'];
    $sum = 0;
    $i = 1;
    while ($i <= $n) {
        $sum += $i;
        $i++;
    }
    echo $sum;
}
?>

<form action="php14.php">
    1+2+3+....+
    <input type="number" name="n">
    <input type="submit" value="=">
</form>