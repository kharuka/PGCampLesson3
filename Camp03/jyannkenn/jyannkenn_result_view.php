<?php

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ表示SQL作成
$id_max=intval($pdo->query("SELECT max(id) FROM gs_j_table")->fetchColumn());
$sql="SELECT * FROM gs_j_table WHERE id=:id";
// var_dump($sql);
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':id',$id_max,PDO::PARAM_INT);

// SQL実行
$status = $stmt->execute();

// データ表示
if($status==false){
  $error=$stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  // データのみ抽出の場合はwhileループで取り出さない
  $row=$stmt->fetch();
  // var_dump($row);
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
      <div class="home-view"><a href="jyannkenn_view.php">Home</a></div>
      <div class="result-view"><a href="jyannkenn_list_view.php">結果一覧</a></div>
    </nav>
  </header>

  <div class="header-block"></div>

  <!-- title -->
  <div class="title-box">
    <h1>ジャンケンアプリ</h1>
  </div>

  <!-- result -->
  <h2>ジャンケン結果</h2>
  <div class="result-box">
    <div class="hand-box">
      <div class="myhand-box">
        <h3>あなたの手</h3>
        <p><?=$row["myhand"]?></p>
      </div>
      <div class="cphand-box">
        <h3>コンピューターの手</h3>
        <p><?=$row["cphand"]?></p>
      </div>
    </div>
    <div class="result">
      <h3>結果</h3>
      <p><?=$row["result"]?></p>
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
