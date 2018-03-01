<?php

// GETでidを取得
$id=$_GET["id"];

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ削除SQL作成
$sql="DELETE FROM gs_j_table WHERE id=:id";
$stmt=$pdo->prepare($sql);

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
