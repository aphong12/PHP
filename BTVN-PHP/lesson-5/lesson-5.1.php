<?php
// tinh chu vi va dien tich hinh chu nha
$a = isset($_POST['a']) && !empty($_POST['a']) ? $_POST['a']:0;
$b = isset($_POST['b']) && !empty($_POST['b']) ? $_POST['b']:0;
function dien_tich ($a,$b){
    return $a*$b;
}
function chu_vi ($a, $b){
    return 2*($a+$b);
}
?>
<form action="#" method = "post">
    <table>
        <tr>
            <td><label for="a">chiều rộng a:</label></td>
            <td><input type="number" name = "a" id=""></td>
        </tr>
        <tr>
            <td><label for="a">chiều dài b:</label></td>
            <td><input type="number" name = "b" id=""></td>
        </tr>
    </table>
    <input type="submit" value="Tính">
    <h1>Diện tích hình chữ nhật là <?= dien_tich($a,$b);?></h1>
    <br>
    <h1>Chu vi hình chữ nhật là <?= chu_vi($a,$b);?></h1>
    
</form>
