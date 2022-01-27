<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="register.css">
  </head>

  <body>
    <header>
      <img src="4eachblog_logo.jpg">
      <div class="login"><a href="login.php">ログイン</a>
    </header>

    <main>
      <form action="register_confirm.php" method="post" enctype="multipart/form-data">
        <div class="form_contents">
          <h2>会員登録</h2>
          <div class="name">
            <div class="required">必須</div>
            <label>氏名</label><br>
            <input type="text" name="name" size="40" class="formbox" required>
          </div>
          <div class="mail">
            <div class="required">必須</div>
            <label>メールアドレス</label><br>
            <input type="text" name="mail" size="40" class="formbox" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
          <div class="password">
            <div class="required">必須</div>
            <label>パスワード</label><br>
            <input type="password" size="40" name="password" class="formbox" id="password" pattern="^[a-zA-Z0-9]{6.}$" required>
          </div>
          <div class="password">
            <div class="required">必須</div>
            <label>パスワード確認</label><br>
            <input type="password" size="40" id="confirm" class="formbox" oninput="ConfirmPassword(this)">
          </div>
          <div class="picture">
            <label>プロフィール写真</label><br>
            <input type="hidden" name="max_file_size" value="1000000">
            <input type="file" name="picture">
          </div>
      
          <div class="comments">
            <label>コメント</label><br>
            <textarea name="comments" class="formbox" cols="45" rows="5" name="comments"></textarea>
          </div>

          <div class="register">
            <input type="submit" class="enter" size="35" value="登録する">
          </div>

        </div>
      </form>
    </main>

    <footer>
      <p>© 2018 InterNous.inc All rights reserved.</p>
    </footer>
  
    <script>
      function ConfirmPassword(confirm){
        var input1 = password.value;
        var input2 = confirm.value;
        if(input1 != input2){
          confirm.setCustomValidity("パスワードが一致しません。");
        } else {
          confirm.setCustomValidity("");
        }
      }
    </script>

  </body>
</html>

