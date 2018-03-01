<?php

// POSTでid,name,email,oldを取得
$id=$_POST["id"];
$name=$_POST["name"];
$email=$_POST["email"];
$old=$_POST["old"];

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

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
