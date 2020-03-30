<?php echo $header; ?>
<div id="form">
  <h1>REMEMBER IT.</h1>
  <div class="content">
  <?php echo Asset::css('auth.css'); ?>
    <form name="form1" method="post" action="">
        <p>name</p>
        <p class="name"><input name="name" type="name" id="username"></p>
        <p>Mail Address</p>
        <p class="mail"><input type="email" name="email" id="email"></p>
        <p>Password</p>
        <p class="pass"><input type="password" name="password" id="password"></p>
        <!-- buttonクラスにしないとsubmitできない-->
        <button class="btn" type="submit" name="button" id="button">Sign up</button>
    </form>
  </div>
</div>
<?php echo $footer; ?>


