<?php

// function
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// post
$name=$_POST["name"];
$old=$_POST["old"];

//

echo h($name)."さん<br>";
echo h($old)."歳<br>";

// rand(min,max)
$num=rand(1,5);

// おみくじ
if($num==1){
  echo "大吉".h($num);
}elseif ($num==2) {
  echo "中吉".h($num);
}elseif ($num==3) {
  echo "小吉".h($num);
}elseif ($num==4) {
  echo "凶".h($num);
}else{
  echo "大凶".h($num);
}

 ?>
