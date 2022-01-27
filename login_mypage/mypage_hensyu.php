<?php

session_start();

if(empty($_POST['from_mypage'])){
  header('Location:login_error.php');
}

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="mypage.css">
    <title>マイページ編集</title>
  </head>
  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <p><a href="log_out.php">ログアウト</a></p>
    </header>
    <main>
      <h2>会員情報</h2>
      <p>こんにちは！　<?php  echo $_SESSION['name']; ?>さん！</p>
      <div class="photo">
        <img src="<?php echo $_SESSION['picture']; ?>">
      <form action="mypage_update.php" method="post">
        </div>
        <div class="info">
          <p>氏名：　<input type="text" value="<?php echo $_SESSION['name']; ?>" name="name"></p>
          <p>メール：　<input type="text" value="<?php echo $_SESSION['mail']; ?>" name="mail"></p>
          <p>パスワード：　<input type="text" value="<?php echo $_SESSION['password']; ?>" name="password"></p>
        </div>
        <div class="comments">
          <textarea rows=5 cols=50 name="comments"><?php echo $_SESSION['comments']; ?></textarea>
        </div>
        <div class="edit">
          <input type="submit" class="edit_button" value="この内容に変更する">
        </div>
      </form>
    </main>
    <footer>
      <p>(c) 2018 InterNous.Inc All rights reserved.</p>
    </footer>
  </body>