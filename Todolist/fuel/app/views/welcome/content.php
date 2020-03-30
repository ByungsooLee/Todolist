<div class="content">
  <h2>ようこそ<?=Auth::get_screen_name()?>さん</h2>
  <p><?=$description?></p>
  <?php foreach ($query as $row): ?>
  <?php endforeach;?>
  </table>
  <p><a href="logout">ログアウト</a></p>
  <a onclick="location.href='logout.php' " class="nav-list-item">Log Out</a>
</div>