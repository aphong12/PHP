<?php
class Calculator {
    // Khai báo thuộc tính
    public $numberA;
    public $numberB;

    // khai báo hằng số
    const _MSG_CONTENT = 'kết quả là: {value}';
    
    // khai báo phương thức 
    public function makeAdd ($a,$b){
        $result = $a +$b;
        return $result;
    }
    public function mackeMinus ($a,$b){
        $result = $a - $b;
        return $result;
    }
    public function showResult ($mag, $value){
        echo str_replace('{value}',$value,$mag);
    }
}
// khởi tạo đối tượng
$calc = new Calculator(); // gọi tên phương thức 

// lấy giá trị đối tượng
echo $calc -> numberA;
echo '<br>';
echo $calc -> numberB;

// gán giá trị mới cho thuộc tính
$calc -> numberA = 10;
$calc -> numberB = 2;


echo '<hr/>';
echo $calc -> mackeMinus($calc -> numberA, $calc -> numberB);
echo '<hr/>';

echo $calc:: _MSG_CONTENT;

echo '<hr/>';

echo '<h1>Kết quả<h1/>';
$calc -> showResult($calc::_MSG_CONTENT, $calc->makeAdd($calc->numberA,$calc->numberB));
