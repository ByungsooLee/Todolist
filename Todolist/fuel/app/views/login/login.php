<?php echo $header; ?>
<div id="form">
  <h1>REMEMBER IT.</h1>
    <div class="content">
      <?php echo Asset::css('auth.css'); ?>
      <form name="form1" method="post" action="/login">
        <?php if(!empty($login_error)): ?>
            <p><?php echo $login_error; ?></p>
        <?php endif; ?>
        <p>name</p>
        <p class="name"><input name="name" type="name" id="username"></p>
        <p>Password</p>
        <p class="pass"><input type="password" name="password" id="password"></p>
        <button class="btn" type="submit" name="button" id="button">Log In</button>
        </form>
      </div>
</div>
<?php echo $footer; ?>








