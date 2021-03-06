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
      <div class="navi-about"><a href="#about">About</a></div>
      <div class="navi-form"><a href="#divine">占う</a></div>
    </nav>
  </header>

  <div class="header-block"></div>

  <!-- title -->
  <div class="title-box">
    <h1>おみくじアプリ</h1>
  </div>

  <!-- about -->
  <div class="about-box">
    <h2 id="about">About</h2>
    <p>今年のあなたの運勢を占います。</p>
  </div>

  <!-- form -->
  <div class="form-box">
    <h2 id="divine">占う</h2>
    <form class="" action="omikuji.php" method="post">
      <div class="table-box">
        <table>
          <tr>
            <td>名前</td>
            <td><input type="text" name="name" size="20" required></td>
          </tr>
          <tr>
            <td>生年月日</td>
            <td>
              <input type="date" name="date" required>
            </td>
          </tr>
        </table>
      </div>

      <!-- button -->
      <div class="button-box">
        <div class="submit-box">
          <p><input type="submit" name="submit" value="送信" class="button"></p>
        </div>
        <div class="reset-box">
          <p><input type="reset" name="reset" value="リセット" class="button"></p>
        </div>
      </div>

    </form>
  </div>

  <!-- footer -->
  <footer id="footer">
    <div class="copyrights">
      <p>copyrights 2018 Omikuji Academy Tokyo All RIghts Reserved.</p>
    </div>
  </footer>

</body>
</html>
