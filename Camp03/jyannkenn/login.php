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
       <div class="result-view"><a href="login.php">結果一覧</a></div>
     </nav>
   </header>

   <div class="header-block"></div>

   <!-- title -->
   <div class="title-box">
     <h1>ログイン画面</h1>
   </div>

   <!-- form -->
   <div class="form-box">
     <div class="form-group">
       <form class="" action="login_act.php" method="post">
         <fieldset>
           <legend>ログイン情報</legend>
           <label>ID：<input type="text" name="loginId" required></input></label><br>
           <label>Password：<input type="password" name="password" required></input></label><br>
         </fieldset>

         <!-- button -->
         <div class="button-box">
           <p><input type="submit" class="btn-success" value="ログイン"></p>
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
