<!DOCTYPE html>
<html lang="ja">
  <head>
    <!-- jquery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <title>Todo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo Asset::css('app.css'); ?>
  </head>
  <header>
    <div class="container">
      <h1 class="headline">
        <p class='index home'>REMEMBER.IT</p>
      </h1>
      <ul class="nav-list">
        <li onclick="location.href='logout/logout.php' " class="nav-list-item">Log Out</li>
      </ul>
    </div>
  </header>
  <body>
    <div class="main">
      <?php $msg = Session::get_flash('slide-msg'); ?>
      <?php if(!empty($msg)){ ?>
      <p id="js-slide" class="slide-msg"><?php echo $msg ?></p>
      <?php } ?>
      <div class="todo">
        <p id="add-empty" class="slide-msg slide-msg-add">todoを記入してください！</p>
        <div class="add">
            <?php echo Form::open(array('action' => 'todo/add', 'method' => 'post')); ?>
            <?php echo Form::input('note','', array('type' => 'text', 'autocomplete' => 'off', 'placeholder' => 'ここにtodoを記入', 'class' => 'write')); ?>
            <?php echo Form::submit('post', '追加', array('type' => 'submit', 'class' => 'btn-add', 'id' => 'add')); ?>
            <?php echo Form::close(); ?>
        </div>
        <table class="list">
            <tbody>
              <?php foreach($todos as $todo): ?>
              <?php $todoId = $todo->id; ?>
              <tr class="item">
              <td class="container">
                  <?php echo Form::open(array('action' => "todo/delete/{$todoId}", 'method' => 'post')); ?>
                  <?php echo Form::submit('post', '削除', array('class' => 'btn-todo btn-delete')); ?>
                  <?php echo Form::close(); ?>
              </td>
              <td class="container char"><?php echo Security::htmlentities($todo->note); ?></td>
              <td class="container">
                  <?php echo Form::open(array('action' => "todo/done/{$todoId}", 'method' => 'post')); ?>
                  <?php echo Form::submit('post', '完了', array('class' => 'btn-todo btn-finish')); ?>
                  <?php echo Form::close(); ?>
              </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
    </div>
    <?php echo Asset::js('jquery.js'); ?>
    <?php echo Asset::js('app.js'); ?>
  </body>
</html>

<?php echo $footer; ?>