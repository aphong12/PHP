<?php
$n = isset($_POST['n']) && !empty($_POST['n']) ? $_POST['n'] : 0;
for($i=0;$i<=$n-1;$i++){
    for($j=$n-$i;$j<=$n;$j++){
        echo '*';
    }
    echo '<br>';
}
for($i=0;$i<=$n-1;$i++){
    for($j=$i+1;$j<=$n;$j++){
        echo '*';
    }
    echo '<br>';
}
