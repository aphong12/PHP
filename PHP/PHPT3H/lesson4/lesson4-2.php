<?php
class baiXe{
    private $baiDoXe = [];

    public function addXe($thongTinXe,$baiDoXe){
    array_push($baiDoXe, $thongTinXe); 
  }
}
$thongTinXe = [
    'chu-xe'=> $_POST['chu-xe'] ?? 0,
    'bien-so' =>  $_POST['bien-so'] ?? 0,
];
?>
<form action="#" method="post">
    <p>Bien so: <input type="text" name = "bien-so" id=""></p>
    <p>Chu xe: <input type="text" name = "chuxe" id=""></p>
    <input type="submit" value = "">
</form>
