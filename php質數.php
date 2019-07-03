<table border='1' width='100%'>
    <?php
    $num = $_GET['num'];
    if (!$num) $num = 100;
    $row1 = (int) ($num / 10);
    $row2 = (int) $num % 10;
    if ($row1 > 0) {
        for ($z = 0; $z < $row1; $z++) {
            echo "<tr>";
            for ($i = (10 * $z) + 1; $i < 10 * ($z + 1) + 1; $i++) {
                if (!istrue($i)) {
                    echo '<td bgcolor="green">';
                    echo $i;
                } else {
                    echo '<td bgcolor="red">';
                    echo $i;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    }
    if ($row2 > 0) {
        for ($z = 0; $z < 1; $z++) {
            echo "<tr>";
            for ($i = (10 * $row1) + 1; $i <= $num ; $i++) {
                if (!istrue($i)) {
                    echo '<td bgcolor="green">';
                    echo $i;
                } else {
                    echo '<td bgcolor="red">';
                    echo $i;
                }
                echo "</td>";
            }
            echo "</tr>";
        }
    }
    function istrue($n)
    {
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                return false;
            }
        }
        return true;
    }

    ?>
</table>