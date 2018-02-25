<?php

// function
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// post
$name=$_POST["name"];
$date=$_POST["date"];

//

echo h($name)."さん<br>";
echo h($date)."<br>";

// rand seed reset
mt_srand();

// rand(min,max)
// $num=rand(1,5);
$num=mt_rand(1,5);

// おみくじ
echo "今年の運勢は：";

if($num==1){
  echo "大吉"."<br>";
  echo '<img src="img/nightsky.jpg" alt="">';
}elseif ($num==2) {
  echo "中吉"."<br>";
  echo '<img src="img/building.jpg" alt="">';
}elseif ($num==3) {
  echo "小吉"."<br>";
  echo '<img src="img/hamburger.jpg" alt="">';
}elseif ($num==4) {
  echo "凶"."<br>";
  echo '<img src="img/lion.jpg" alt="">';
}else{
  echo "大凶"."<br>";
  echo '<img src="img/cat.jpg" alt="">';
}

 ?>
