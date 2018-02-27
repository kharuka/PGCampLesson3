<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Kuranami Haruka">
  <title>おみくじアプリ</title>
  <link rel="stylesheet" href="css/style-omikuji.css">
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
    <h1>おみくじアプリ</h1>
  </div>

  <!-- result -->
  <div class="result-box">
    <h2 id="result">占い結果発表</h2>

      <?php
      // import functions
      include("function/funcs.php");

      // post
      $name=$_POST["name"];
      $date=$_POST["date"];

      // text
      echo h($name)."さん<br>";
      echo h($date)."生まれの今年のあなたの運勢は？<br>";

      // random int (min,max)
      $num=mt_rand(1,10);

      // おみくじ結果
      if($num==1){
        echo "大吉"."<br>";
        echo '<img src="img/nightsky.jpg" alt="">';
      }elseif ($num >= 2 && $num < 4) {
        echo "中吉"."<br>";
        echo '<img src="img/building.jpg" alt="">';
      }elseif ($num >= 4 && $num < 8) {
        echo "小吉"."<br>";
        echo '<img src="img/hamburger.jpg" alt="">';
      }elseif ($num >= 8 && $num < 10) {
        echo "凶"."<br>";
        echo '<img src="img/lion.jpg" alt="">';
      }else{
        echo "大凶"."<br>";
        echo '<img src="img/cat.jpg" alt="">';
      }
      ?>

  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      <p>copyrights 2018 Omikuji Academy Tokyo All RIghts Reserved.</p>
    </div>
  </footer>

</body>
</html>
