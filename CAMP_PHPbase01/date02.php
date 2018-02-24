<?php

// date関数
function ymdhis(){
  return date("Y年m月d日 H時i分s秒")."<br>";
}

function ymd(){
  return date("Y/m/d")."<br>";
}

function his(){
  return date("H:i:s")."<br>";
}

echo ymdhis();
echo ymd();
echo his();

 ?>
