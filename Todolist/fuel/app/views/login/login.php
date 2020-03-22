<?php echo $header; ?>
    <form name="form1" method="post" action="">
      <?php if(!empty($login_error)): ?>
          <p><?php echo $login_error; ?></p>
      <?php endif; ?>
        <table width="100%" border="1">
          <th scope="row" class="form-title">ユーザー名</th>
          <td><label for="username"></label>
          <input name="username" type="text" id="username"></td>
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
<?php echo $footer; ?>



