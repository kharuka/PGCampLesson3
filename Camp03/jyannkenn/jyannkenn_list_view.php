<?php

// 関数呼び出し
include("function/funcs.php");

// セッションチェック
session_start();
$ssid="chk_ssid";
sessionCheck($ssid);

// DB接続します（エラー処理追加）
$dbname='gs_db';
$pdo=dbConnect($dbname);

// QueryのBufferを使用
$pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);

// データ表示SQL作成
$sql="SELECT * FROM gs_j_table";
$stmt=$pdo->prepare($sql);
$status = $stmt->execute();

// データ表示
$view="";
if($status==false){
  $error=$stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  // Selectデータの数だけ自動でループしてくれる
  while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
    $view.='<tr>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["name"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["email"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["old"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["myhand"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["cphand"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["result"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_update_view.php?id='.$result["id"].'">'.$result["jdate"].'</a></p></td>';
    $view.='<td><p><a href="jyannkenn_delete.php?id='.$result["id"].'">[削除]</a></p></td>';
    $view.='</tr>';
  }
}

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Kuranami Haruka">
  <title>ジャンケンアプリ</title>
  <link href="css/style-jyannkenn.css" rel="stylesheet">
  <!-- BootstrapのCSS読み込み -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery読み込み -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- BootstrapのJS読み込み -->
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

  <!-- header -->
  <header class="header" id="header">
    <nav class="navi-box">
      <div class="header-logo">ジャンケン</div>
      <div class="result-view"><a href="jyannkenn_list_view.php">結果一覧</a></div>
      <div class="result-view"><a href="logout.php">ログアウト</a></div>
    </nav>
  </header>

  <div class="header-block"></div>

  <!-- title -->
  <div class="title-box">
    <h1>ジャンケンアプリ</h1>
  </div>

  <!-- select -->
  <h2>データ表示</h2>
  <div class="view-box">
    <div class="container">
      <table class="table table-striped">
        <!-- <caption></caption> -->
        <thead>
          <tr>
            <th>名前</th>
            <th>Email</th>
            <th>年齢</th>
            <th>あなたの手</th>
            <th>CPの手</th>
            <th>結果</th>
            <th>Date Time</th>
            <th>削除</th>
          </tr>
        </thead>
        <!-- <tfoot></tfoot> -->
        <tbody>
          <?=$view?>
        </tbody>
      </table>
    </div>
  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      copyrights 2018 Jyannkenn Academy Tokyo All RIghts Reserved.
    </div>
  </footer>

</body>
</html>
