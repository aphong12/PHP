<?php
function giaiPtB1 ($a,$b){
    if($a == 0){
        echo 'Phương trình vô số nghiệm';
    }else{
        $x = -$b/$a;
        echo 'Phương trình có nghiệm x = ' . ' ' . $x;
    }
    return 0;
}
function giaiPtB2 ($a,$b,$c){
    if ($a == 0){
        return giaiPtB1($b,$c);
    }
    $delta = $b*$b - 4*$a*$c;
    if($delta < 0){
        echo 'Phương trình vô nghiệm';
    }
    if($delta == 0){
        $x = -$b/2/$a;
        echo  'Phương trình có nghiệm kép x = ' . ' ' . $x;
    }
    if ($delta > 0){
        $x1 = (-$b + sqrt($delta)) / (2*$a);
        $x2 = (-$b - sqrt($delta)) / (2*$a);

        echo 'Phương trình có hai nghiện phân biệt' . ' ' . 'x1 = ' . $x1 . ' ' . 'và x2 = ' . $x2;
    }
}
$a = '';
$b = '';
$c = '';
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    return giaiPtB2($a,$b,$c);
}
