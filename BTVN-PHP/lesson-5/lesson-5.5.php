<?php
// Tính biểu thức có dạng S= 1/1+1/2+....+1/n
$n = isset($_POST['n']) && !empty($_POST['n']) ? $_POST['n']:0;
    $s= (float)0.000;
function tinh($n){
    global $s;
    for($i=1;$i<=$n;$i++){
        $s +=1/$i;
    }
    return $s;
}
?>
<form action="#" method="post">         
    <label for="n">n=</label>
    <input type="number" name = "n" id="">
    <input type="submit" value = "Tinh">
    <h1>Kết quả: <?= tinh($n);?></h1>
</form>
