<?php

function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

$name=$_POST["name"];
$email=$_POST["email"];

 ?>

<p>お名前：<?=$name?></p>
<p>お名前：<?=htmlspecialchars($name,ENT_QUOTES);?></p>
<p>MAIL：<?=$email?></p>
<p>MAIL：<?=h($email);?></p>
