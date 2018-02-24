<?php

// function
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// post
$user_hand=$_POST["radiobutton"];

// rand(min,max)
$num=rand(1,3);

// computer hand
if($num==1){
  $computer_hand="グー";
}elseif ($num==2) {
  $computer_hand="チョキ";
}else {
  $computer_hand="パー";
}

echo "あなたの手:".$user_hand."<br>";
echo "コンピューターの手:".$computer_hand."<br>";

// result
if($user_hand==$computer_hand){
  echo "引き分け";
}elseif ($user_hand=="グー") {
  if($computer_hand=="チョキ"){
    echo "あなたの勝ち";
  }else{
    echo "あなたの負け";
  }
}elseif ($user_hand=="チョキ") {
  if($computer_hand=="パー"){
    echo "あなたの勝ち";
  }else{
    echo "あなたの負け";
  }
}else{
  if($computer_hand=="グー"){
    echo "あなたの勝ち";
  }else{
    echo "あなたの負け";
  }
}

 ?>
