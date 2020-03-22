<!DOCTYPE HTML>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <?php echo Asset::css('auth.css'); ?>
  </head>
  <body>
    <header>
      <?php require 'header.php'; ?>
    </header>
      <div id="form">
      <div class="row alert alert-danger">
        <p><?php echo Session::get_flash('message') ?></p>
      </div>

        <h1>REMEMBER IT.</h1>
        <div class="content">
        <?php echo Form::open(['action' => 'user/register', 'method' => 'post']); ?>
          <form name="form1" method="post" action="">
              <p>name</p>
              <p class="name"><input name="username" type="name" id="username"></p>
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


