<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>Todo</title>
    <?php echo Asset::css('base.css'); ?>
  </head>
  <body>
    <header>
      <?php require 'header.php'; ?>
    </header>
    <div class="top-wrapper">
      <div class="container">
        <h1>REMEMBER.IT</h1>
            <div class="btn-wrapper">
              <a onclick="location.href='signup' " class="btn signup inline-block">Sign Up</a>
              <a onclick="location.href='login' " class="btn signup inline-block">Log In</a>
            </div>
      </div>
    </div>
  </body>
</html>


