<?php
// tính chu vi và diện tích hình vuông
    $a = !empty($_POST['a']) ? $_POST['a']:0;
    function dien_tich ($a): float
    {
        return $a*$a;
    }
    function chu_vi ($a){
        return 4*$a;
    }
?>
<form action="#" method = "post">
    <table>
        <tr>
            <td><label for="a">Cạnh a:</label></td>
            <td><label for=""></label><input type="number" name = "a" id=""></td>
        </tr>
    </table>
    <input type="submit" value="Tính">
    <h1>Diện tích hình vuông là <?= dien_tich($a);?></h1>
    <br>
    <h1>Chu vi hình vuông là <?= chu_vi($a);?></h1>
    
</form
