<?php

// XSS対応関数
function h($val){
  return htmlspecialchars($val,ENT_QUOTES);
}

// セッションチェック
function sessionCheck($ssid){
  if(!isset($_SESSION[$ssid]) || $_SESSION[$ssid]!=session_id()){
    echo "LOGIN Error!";
    exit();
  }else{
    session_regenerate_id(true);
    $_SESSION[$ssid]=session_id();
  }
}

// DB接続します（エラー処理追加）
function dbConnect($dbname){
  try{
    $pdo=new PDO('mysql:dbname='.$dbname.';charset=utf8;host=localhost','root','');
  }catch(PDOException $e){
    exit('DbConnectError:'.$e->getMessage());
  }
  return $pdo;
}

 ?>
