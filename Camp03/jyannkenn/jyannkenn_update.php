<?php

// 関数呼び出し
include("function/funcs.php");

// セッションチェック
session_start();
$ssid="chk_ssid";
sessionCheck($ssid);

// POSTでid,name,email,oldを取得
$id=h($_POST["id"]);
$name=h($_POST["name"]);
$email=h($_POST["email"]);
$old=h($_POST["old"]);

// DB接続します（エラー処理追加）
$dbname='gs_db';
$pdo=dbConnect($dbname);

// データ更新SQL作成
$sql="UPDATE gs_j_table SET name=:name,email=:email,old=:old WHERE id=:id";
$stmt=$pdo->prepare($sql);

$stmt->bindValue(':name',$name,PDO::PARAM_STR);
$stmt->bindValue(':email',$email,PDO::PARAM_STR);
$stmt->bindValue(':old',$old,PDO::PARAM_STR);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);

// SQL実行
$status = $stmt->execute();

// データ表示
if($status == false){
  // SQL実行時にエラーがある場合（エラーオブジェクトを取得して表示）
  $error=$stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  // リダイレクト
  header("Location: jyannkenn_list_view.php");
  exit;
}

 ?>
