
<?php
class Calculator{
    // Khai báo thuộc tính
    public $numberA;
    public $numberB;
    

    // phuoqng thức gán giá trị
    public function setNumberA($value){
        $this -> numberA = $value;
    }
    public function setNumberB($value){
        $this -> numberB = $value;
    }
    // phương thức lấy giá trị thuộc tính
    public function getNumberA(){
        return $this -> numberA;
    }
    public function getNumberB(){
        return $this -> numberB;
    }
    // khai báo hằng số
    const _MSG_CONTENT = 'kết quả là: {value}';
    
    // khai báo phương thức 
    public function makeAdd ($a=0,$b=0){
        $a = $a != 0 ? $a : $this->numberA;
        $b = $b != 0 ? $b : $this -> numberB;
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
    public function showResults($value){
        $mag = $this::_MSG_CONTENT;
        $this -> showResult($mag,$value);
    }
}
$calc = new Calculator;

$calc -> setNumberA(100);
$calc -> setNumberB (200);

$total = $calc->makeAdd($calc->getNumberA(), $calc->getNumberB());

$calc -> showResults($total);
