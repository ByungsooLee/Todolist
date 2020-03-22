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
          <form name="form1" method="post" action="/signup/create">
              <p>name</p>
              <p class="name"><input name="username" type="text" id="username" value="<?=$username?>"></p>
              <p>Password</p>
              <p class="pass"><input type="password" name="password" id="password"></p>
              <input class="btn" type="submit" name="button" id="button" value="送信">
          </form>
        </div>
      </div>
  </body>
</html>


