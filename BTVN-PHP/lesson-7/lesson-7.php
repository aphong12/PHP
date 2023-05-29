<?php

   class ArrayXe 
   {
    private $numbers = [];

    public function logXe($number)
    {
        if (array_count_values($numbers) % 2 == 0) {
            return "Đã trả xe";
        }
        return "Đang mượn xe";
    }
    public function themXe($numbers) 
    {
        $numbers[] = $number;
    }
    public function suaXe() 
    {
        $numbers[$key] = $value;
    }
    public function xoaXe() {
        unset($numbers[$key]);
    }
    public function choThue() {
        if (array_count_values($numbers) % 2 == 0) {
            return "Sẵn sàng cho thuê";
        }
        return "Hết xe cho thuê";
    }
}

?>
