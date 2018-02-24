<?php

$str_base = "PHP4,PHP5,PHP6,PHP7";

var_dump($str_base);

echo "<br>";

$ar_base=explode(",",$str_base);

var_dump($ar_base);

echo "<br>";

echo $ar_base[0]."<br>";
echo $ar_base[3]."<br>";

 ?>
