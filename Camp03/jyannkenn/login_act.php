<?php

// 関数呼び出し
include("function/funcs.php");

session_start();

// POSTでliginId,passwordを取得
$loginId=h($_POST["loginId"]);
$password=h($_POST["password"]);

// DB接続します（エラー処理追加）
$dbname='gs_db';
$pdo=dbConnect($dbname);

// データ更新SQL作成
$sql="SELECT * FROM gs_user_table WHERE u_id=:loginId AND u_pw=:password";
$stmt=$pdo->prepare($sql);

$stmt->bindValue(':loginId',$loginId,PDO::PARAM_STR);
$stmt->bindValue(':password',$password,PDO::PARAM_STR);

// SQL実行
$status = $stmt->execute();

// SQL実行時にエラーがある場合（エラーオブジェクトを取得して表示）
if($status == false){
  $error=$stmt->errorInfo();
  exit("QueryError:".$error[2]);
}

// 1レコード取得
$var=$stmt->fetch();

// 該当レコードがあればSESSIONに値を代入
if($var["id"]!=""){
  $_SESSION["chk_ssid"]=session_id();
  $_SESSION["u_name"]=$var['u_name'];

  // リダイレクト
  header("Location: jyannkenn_list_view.php");
}else{
  // リダイレクト
  header("Location: login.php");
}

// 処理終了
exit();

 ?>
