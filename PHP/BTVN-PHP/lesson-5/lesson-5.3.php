<?php
// tính chu vi và diện tích hình vuông
    $r = isset($_POST['r']) && !empty($_POST['r']) ? $_POST['r']:0;
    function dien_tich ($r){
        $myFloat = 3.14;
        return $myFloat*$r*$r;
    }
    function chu_vi ($r){
        $myFloat = 3.14;
        return 2*$myFloat*$r;
    }
?>
<form action="#" method = "post">
    <table>
        <tr>
            <td><label for="r">Bán kính r:</label></td>
            <td><input type="number" name = "r" id=""></td>
        </tr>
    </table>
    <input type="submit" value="Tính">
    <h1>Diện tích hình tròn là <?= dien_tich($r);?></h1>
    <br>
    <h1>Chu vi hình tròn là <?= chu_vi($r);?></h1>
    
</form>
