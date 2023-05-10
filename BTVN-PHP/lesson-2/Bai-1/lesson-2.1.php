<?php
function tinh_tong ($n){
    $tong = 0;
    for($i =1 ;$i <= $n; $i++){
        $tong += $i;
    }
    return $tong;
}
$n = '';
if(isset($_POST['n'])){
    $n = $_POST ['n'];
    echo 'Tong tu 1 den n la:' . ' '.tinh_tong($n);
}