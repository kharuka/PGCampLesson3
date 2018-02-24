<?php

$d=date("s");

if($d >= 0 & $d < 20){
  include("date1_test.html");
}elseif ($d >= 20 & $d < 40) {
  include("date2_test.html");
}else{
  include("date3_test.html");
}

echo '<p>現在：'.$d.'秒</p>';

 ?>
