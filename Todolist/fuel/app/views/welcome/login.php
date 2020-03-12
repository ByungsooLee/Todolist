<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <?php echo Asset::css('base.css'); ?>
  </head>
  <body>
    <header>
      <?php require 'header.php'; ?>
    </header>
    <form name="form1" method="post" action="">
      <?php echo $login_error?>
        <table width="100%" border="1">
          <th scope="row" class="form-title">ユーザー名</th>
          <td><label for="username"></label>
          <input name="username" type="text" id="username" value="<?=$username?>"></td>
        </tr>
        <tr>
          <th scope="row">パスワード</th>
          <td><label for="password"></label>
          <input type="password" name="password" id="password"></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="button" id="button" value="送信"></th>
        </tr>
        </table>
    </form>
  </body>
</html>

<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <?php echo Asset::css('auth.css'); ?>
  </head>
  <body>
    <header>
      <?php require 'header.php'; ?>
    </header>
      <div id="form">
        <h1>REMEMBER IT.</h1>
        <div class="content">
          <form name="form1" method="post" action="">
              <p>name</p>
              <p class="name"><input name="name" type="name" id="username"></p>
              <p>Mail Address</p>
              <p class="mail"><input type="email" name="email" id="email"></p>
              <p>Password</p>
              <p class="pass"><input type="password" name="password" id="password"></p>
              <input class="btn" type="submit" name="button" id="button" value="Sign Up">
          </form>
        </div>
      </div>
  </body>
</html>


