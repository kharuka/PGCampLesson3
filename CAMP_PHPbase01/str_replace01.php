<?php

$str_base = "PHP4_PHP5_PHP6";

// var_dump($str_base);

$str=str_replace("PHP5","PHP5.5",$str_base);

// var_dump($str);

echo $str."<br>";

$ar_base = array("PHP4","PHP5","PHP6");

$ar_base[0]=str_replace($ar_base[0],"PHP4.1",$ar_base[0]);

var_dump($ar_base);

echo "<br>";

for($i=0;$i<3;$i++){
  echo $ar_base[$i]."<br>";
}

 ?>
