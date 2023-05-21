<?php
// 

class Calculator {
    private $numbers;

    public function __construct(){
        $this -> numbers = array();
    }
    // them phan tu vao mang
    public function addNumver ($number){
        $this -> numbers[] = $number;
    }
    //ham in ra cac phan tu da nhap
    public function inNumcers (){
        echo "Number array: " . implode(", ", $this -> numbers). "<br>";
    }
    public function countArray (){
        echo "Count Array: " .count($this -> numbers) . "<br>";
    }
    public function sumArray (){
        echo " Sum of Array: " . array_sum($this-> numbers) . "<br>";
    }
    public function uniqeArray (){
        echo " Uniqe of Array: " . implode(", ",array_unique($this -> numbers)) . "<br>";
    }
    public function uniqeNumberArray (){
        return array_count_values($this -> numbers);
    }
}

$calc = new Calculator;
// nhập phần tử trong mang
$calc -> addNumver(5);
$calc -> addNumver(9);
$calc -> addNumver(7);
$calc -> addNumver(2);
$calc -> addNumver(1);
$calc -> addNumver(9);
$calc -> addNumver(2);

// in ra mảng
$calc -> inNumcers();
// number in array
$calc -> countArray();
// Sum Array
$calc -> sumArray();
// Unique Array 
$calc -> uniqeArray();

$newArray = $calc -> uniqeNumberArray();
echo "New Array: <br>";
foreach($newArray as $value => $count){
    echo $value . " : " . $count . " lần <br>";
}

