<?php

$d=date("s");
if($d >=30){
  echo '<p style="color:red">30秒以上</p>';
}else{
  echo '<p style="color:blue">30秒未満</p>';
}

echo '<p>現在：'.$d.'秒</p>';

 ?>
