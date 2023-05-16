<?php
   $n = isset($_POST['so_n']) && !empty($_POST['so_n']) ? $_POST['so_n']: 0;
   for ($i = 1;$i< $n;$i++){
    $str .= $i .'-';
   }
   $str .= $n;
   echo $str;
?>
<form action="#" method="post">
    <label for="so_n">n=</label>
    <input type="number" name = "so_n" id="">
    <input type="submit" value = "Tinh">
</form>
