<?php
  $n = $_POST['so_n'] ?? 0;
  function nguyen_to($x): bool
  {
      if ($x <= 1){
          return false;
      }
      if ($x == 2){
          return false;
      }
      for($i = 2; $i < sqrt($x)+1;$i++){
          if($x % $i==0){
              return false;
          }
      }
      return true;
  }
?>
<form action="#" method="post">
    <label for="so_n">n=</label>
    <input type="number" name = "so_n" id="so_n">
    <input type="submit" value = "Tinh">
</form>
<h1>Ket Qua:<?= nguyen_to($n)? "so $n la so nguyen to" : "so $n khong la so nguyen to"; ?></h1>

