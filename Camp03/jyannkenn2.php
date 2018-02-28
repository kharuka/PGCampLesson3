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
  <header id="header">
    <nav class="navi-box">
      <div class="header-logo"></div>
    </nav>
  </header>

  <div class="header-block"></div>

  <!-- title -->
  <div class="title-box">
    <h1>ジャンケンアプリ</h1>
  </div>

  <!-- result -->
  <div class="result-box">
  <?php

  // import functions
  include("function/funcs.php");

  // post
  $user_hand=$_POST["radiobutton"];

  // rand(min,max)
  $num=mt_rand(1,3);

  // computer hand
  if($num==1){
    $computer_hand="グー";
  }elseif ($num==2) {
    $computer_hand="チョキ";
  }else {
    $computer_hand="パー";
  }

  echo "あなたの手:".$user_hand."<br>";
  echo "コンピューターの手:".$computer_hand."<br>";

  // result
  if($user_hand==$computer_hand){
    echo "引き分け";
  }elseif ($user_hand=="グー") {
    if($computer_hand=="チョキ"){
      echo "あなたの勝ち";
    }else{
      echo "あなたの負け";
    }
  }elseif ($user_hand=="チョキ") {
    if($computer_hand=="パー"){
      echo "あなたの勝ち";
    }else{
      echo "あなたの負け";
    }
  }else{
    if($computer_hand=="グー"){
      echo "あなたの勝ち";
    }else{
      echo "あなたの負け";
    }
  }
   ?>
  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      <p>copyrights 2018 Jyannkenn Academy Tokyo All RIghts Reserved.</p>
    </div>
  </footer>

</body>
</html>
