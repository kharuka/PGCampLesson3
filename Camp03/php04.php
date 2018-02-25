<?php

$a=1;
$b=2;

// rand seed reset
mt_srand();

// rand(min,max)
// $num=rand(1,5);
$num=mt_rand(1,2);

if($a == $num){
  echo $a."が表示されました"."<br>";
}else{
  echo $b."が表示されました"."<br>";
}

 ?>
