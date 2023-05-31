<table border="1px">
    <?php
    for ($i = 1; $i <= 8; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 8; $j++) {
            $color = ($i + $j) % 2 == 0 ? 'white' : 'black';
            echo "<td style='
                             background-color: $color;
                             height: 100px;
                             width: 100px;
                             '></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
