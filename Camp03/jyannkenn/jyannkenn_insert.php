<?php

// 入力チェック（受信確認処理追加）
if(
  !isset($_POST["name"]) || $_POST["name"]=="" ||
  !isset($_POST["email"]) || $_POST["email"]=="" ||
  !isset($_POST["old"]) || $_POST["old"]=="" ||
  !isset($_POST["radiobutton"]) || $_POST["radiobutton"]==""
  ){
     exit('ParamError');
   }

// if(
// !empty($_POST["name"])
// !empty($_POST["email"])
// !empty($_POST["naiyou"])
// ){
//   exit('ParamError');
// }

// POSTデータ取得
$name=$_POST["name"];
$email=$_POST["email"];
$old=$_POST["old"];
$myhand=$_POST["radiobutton"];

// rand(min,max)
$num=mt_rand(1,3);

// computer hand
if($num==1){
  $cphand="グー";
}elseif ($num==2) {
  $cphand="チョキ";
}else {
  $cphand="パー";
}

// result
if($myhand==$cphand){
  $result = "引き分け";
}elseif ($myhand=="グー") {
  if($cphand=="チョキ"){
    $result = "あなたの勝ち";
  }else{
    $result = "あなたの負け";
  }
}elseif ($myhand=="チョキ") {
  if($cphand=="パー"){
    $result = "あなたの勝ち";
  }else{
    $result = "あなたの負け";
  }
}else{
  if($cphand=="グー"){
    $result = "あなたの勝ち";
  }else{
    $result = "あなたの負け";
  }
}

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ登録SQL作成
$sql="INSERT INTO gs_j_table(id,name,email,old,myhand,cphand,result,jdate)
VALUES(NULL,:a1,:a2,:a3,:a4,:a5,:a6,sysdate())";

$stmt=$pdo->prepare($sql);

$stmt->bindValue(':a1',$name,PDO::PARAM_STR);
$stmt->bindValue(':a2',$email,PDO::PARAM_STR);
$stmt->bindValue(':a3',$old,PDO::PARAM_STR);
$stmt->bindValue(':a4',$myhand,PDO::PARAM_STR);
$stmt->bindValue(':a5',$cphand,PDO::PARAM_STR);
$stmt->bindValue(':a6',$result,PDO::PARAM_STR);

// SQL実行
$status = $stmt->execute();

// データ登録処理後
if($status == false){
  // SQL実行時にエラーがある場合（エラーオブジェクトを取得して表示）
  $error=$stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  // リダイレクト
  header("Location: jyannkenn_result_view.php");
  exit;
}

 ?>
