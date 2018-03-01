<?php

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ表示SQL作成
$sql="SELECT * FROM gs_j_table";
$stmt=$pdo->prepare($sql);
$status = $stmt->execute();

// データ表示
$view="<p>名前,Email,年齢,あなたの手,CPの手,結果,DateTime</p>";
if($status==false){
  $error=$stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  // Selectデータの数だけ自動でループしてくれる
  while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="bm_update_view.php?id='.$result["id"].'">';
    $view .= $result["name"].",".$result["email"].",".$result["old"].",".$result["myhand"].",".$result["cphand"].",".$result["result"].",".$result["jdate"];
    $view .= '</a>';
    $view .= ' ';
    $view .= '<a href="bm_delete.php?id='.$result["id"].'">';
    $view .= ' [削除] ';
    $view .= '</a>';
    $view .= '</p>';
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
      <div class="home-view"><a href="jyannkenn_view.php">Home</a></div>
      <div class="result-view"><a href="jyannkenn_list_view.php">結果一覧</a></div>
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
    <div class="view-subbox">
      <?=$view?>
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
