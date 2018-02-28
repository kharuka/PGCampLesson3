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

  <!-- form -->
  <div class="form-box">
    <div class="form-group">
      <form class="" action="jyannkenn2.php" method="post">
        <div class="radio">
          <label>
            <input type="radio" class="custom-radio" name="radiobutton" value="グー" required>
            グー
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" class="custom-radio" name="radiobutton" value="チョキ" required>
            チョキ
          </label>
        </div>
        <div class="radio">
          <label>
            <input type="radio" class="custom-radio" name="radiobutton" value="パー" required>
            パー
          </label>
        </div>

        <!-- button -->
        <p>ジャンケン<input type="submit" class="btn-success" value="ポン"></p>
      </form>
    </div>
  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      <p>copyrights 2018 Jyannkenn Academy Tokyo All RIghts Reserved.</p>
    </div>
  </footer>

</body>
</html>
