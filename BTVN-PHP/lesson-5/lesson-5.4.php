<?php
   $n = isset($_POST['so_n']) && !empty($_POST['so_n']) ? $_POST['so_n']: 0;    
    $str = '';
   for ($i = 1;$i< $n;$i++){
    $str .= $i .'-';
    }
    $str .= $n;
?>
<form action="#" method="post">         
    <label for="so_n">n=</label>
    <input type="number" name = "so_n" id="">
    <input type="submit" value = "Tinh">
    <h1>Mảng theo yêu cầu: <?= $str;?></h1>
</form>
