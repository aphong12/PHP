<?php
class Number{
    // thuộc tinhd với biến
    public $numberA = 1;
    public $numberB = 2;
    
    // Phương thức hàm
    function makeTotal ($a ,$b){
        return $a + $b;
    }
}
// Khởi tạo đối tượng 
$numberObj = new  Number();

$total = $numberObj -> makeTotal($numberObj->numberA, $numberObj->numberB);
echo $total;
