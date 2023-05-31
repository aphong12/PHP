<?php
/*
Một dịch vụ thuê xe có các xe đánh số bất kì được lưu thành 1 mạng: VD [1, 2, 7]
Một mảng lưu lại danh sách quá trình mượn, trả xe của hãng với mỗi lần mượn hay trả xe được viết số xe vào mảng VD: [1, 1, 2, 7, 2, 1] – Xe 1 và 2 đã có 1 lần mượn và trả, xe 7 và xe 1 đang mượn
Viết hàm thực hiện việc ghi log mượn, trả xe
Viết hàm thêm, xoá xe
Viết hàm hiển thị log
Viết hàm hiển thị có bao nhiêu xe đang sẵn sàng cho thuê
*/

class CarThue{

    private $carPresent = [];
    private $carRent = [];

    // add car
    public  function addCar($carNumber)
    {
        $this -> carPresent = $carNumber;
    }
    // remove car
    public function removeCar($carNumber){
        $index = array_search($carNumber, $this -> carPresent);
        if($index !== false){
            unset($this -> carPresent[$index]);
        }
    }
    // add car rent 
    public function addCarRent($carNumber)
    {
        if(!in_array($carNumber, $this -> carPresent)){
            $this -> carRent = $carNumber;
        }
    }
    // hien thi so luong xe dang thue
    public function displayCarPresent(){
        $count = count($this -> carPresent);
        echo 'So luong xe da thue: ' . $count . "\n";
    }
    // hien thi xe san sang cho thue
    public function displayCarRent(){
        echo 'Xe da thue:\n';
        foreach($this -> carRent as $carNumber){
            echo $carNumber . "\n";
        }
    }

}

$car = new CarThue;

// add vao mang
$car -> addCar(1);
$car -> addCar(7);
$car -> addCar(2);
// add so lan so xe thue
$car -> addCarRent(1);
$car -> addCarRent(1);
$car -> addCarRent(2);
$car -> addCarRent(7);
$car -> addCarRent(2);
$car -> addCarRent(1);

$car -> displayCarPresent();
$car -> displayCarRent();