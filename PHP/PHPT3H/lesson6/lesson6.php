<?php
$str = "Phong dep trai";

class StringConfic{
    public static function vietHoaChuDauTien ($str){
        return ucfirst($str);
    }
    public static function chenSDT ($str){
        $text = self::vietHoaChuDauTien($str); 
        return $text . ' 0368811466';
    }
}

$str = StringConfic::chenSDT($str);
echo $str;
