<table border="1px" style="border-collapse: collapse;">
    <?php
    for($i=1;$i<=10;$i++){
        echo '<tr>';
        for($j=1;$j<=10;$j++){
            $number = ($i-1)*10 + $j;
            $color = gmp_prob_prime($number)==2 ? 'green' : 'white';
            echo "<td style='
                            background-color: $color;
                            height: 70px;
                            width: 70px;
                            text-align: center;
                            ' ><b>$number</b></td>";
        }
        echo '</tr>';
    }
    ?>
</table>
