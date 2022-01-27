<?php
session_start();
if(isset($_SESSION['id'])){
  header('Location:mypage.php');
}


?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset = "utf-8">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <p class="login"><a href="login.php">ログイン</a></p>
    </header>
    <main>
      <form action="mypage.php" method="post">
        <div class="form_contents">
          <div class="error_message">メールアドレスまたはパスワードが間違っています。</div>
          <div class="mail">
            <label>メールアドレス<br>
              <input type="text" class="formbox" size="40" value="" name="mail">
            </label>
          </div>
          <div class="password">
            <label>パスワード<br>
              <input type="password" class="formbox" size="40" value="" name="password">
            </label>
          </div>
          <div class="login_check">
            <label><input type="checkbox" class="formbox" size="40" name="login_keep" value="login_keep"
            <?php
              if(isset($_COOKIE['login_keep'])){
                echo "checked = 'checked'";
              }
            ?>>ログイン情報を保持する
            </label>
          </div>
          <div class="login_button">
            <input type="submit" value="ログイン">
          </div>
        </div>
      </form>
    </main>
    <footer>
      (c) 2018 InterNous.inc. All rights reserved.
    </footer>
  </body>
</html>