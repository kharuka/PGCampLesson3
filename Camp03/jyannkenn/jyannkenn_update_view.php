<?php

// 更新するレコードのidをGET
$id=$_GET["id"];

// DB接続します（エラー処理追加）
try{
  $pdo=new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
}catch(PDOException $e){
  exit('DbConnectError:'.$e->getMessage());
}

// データ取得SQL作成
$sql="SELECT * FROM gs_j_table WHERE id=:id";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示
if($status==false){
  $error=$stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  // データのみ抽出の場合はwhileループで取り出さない
  $row=$stmt->fetch();
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

    <!-- form -->
    <div class="form-box">
      <div class="form-group">
        <form class="" action="jyannkenn_update.php" method="post">
          <fieldset>
            <legend>個人情報</legend>
            <label>名前：<input type="text" name="name" value="<?=$row["name"]?>" required></input></label><br>
            <label>Email：<input type="email" name="email" value="<?=$row["email"]?>" required></input></label><br>
            <label>年齢：<input type="text" name="old" value="<?=$row["old"]?>" required></input></label><br>
            <input type="hidden" name="id" value="<?=$row["id"]?>">
          </fieldset>

          <!-- button -->
          <div class="button-box">
            <p><input type="submit" class="btn-success" value="更新"></p>
            <p><input type="reset" class="btn-success" value="リセット"></p>
          </div>

        </form>
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
